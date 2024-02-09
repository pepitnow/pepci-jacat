<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mylog Class
 
   This class sends log messages to mysql table
   
   If the table is not in the DB it is created by the constructor
   of this same class
   
   You can choose the type of messages. i.e. NOTICE
                                             ERROR
                                             WARNING
                                             INFO
    Author: Pablo Paupy - pepITnow Jan 2016
   
 */
class Mylog  {
        
        // Class variables
        
        var $table_name = 'log';
        
        // Mysql table fields 
        var $fields = array('topic'    => array( 'type' => 'VARCHAR',
                                             'constraint' => '100'
                                        ),
                        'user_id'  => array( 'type' => 'INT',
                                             'constraint' => '5',
                                             'null' => TRUE
                                        ),
                        'date'     => array( 'type' => 'TIMESTAMP',
                                             'null' => FALSE
                                        ),
                        'log_type' => array( 'type' => 'VARCHAR',
                                             'constraint' => '50'
                                    ),
                        'message'  => array( 'type' => 'VARCHAR',
                                    'constraint' => '8192'
                                ),
                        'extra_data'  => array( 'type' => 'VARCHAR',
                                    'constraint' => '8192',
                                    'null' => TRUE
                                )
                        );
        
        public function __construct()
        {
            //parent::__construct();
            
            // Check if there is a valid mysql connection
            $CI = &get_instance();
            
            $CI->load->dbforge();
            $CI->load->database();
            
            
            // Check if the table mylogs exists or create it
            $CI->dbforge->add_field('id');
            $CI->dbforge->add_field($this->fields);
            $CI->dbforge->create_table($this->table_name, TRUE);
            
        }
        
        /**
            Descripcion: esta funcion manda logs a una tabla de mysql
                         la tabla es creada automaticamente por la clase si no existe
            
            Parametros: $topic {string} que topico de la apliacion se loguea
                        e.g. "USER_LOGIN" (se recomienda mayusculas)
                        
                        $msg {string} EL mensaje que se quiere loguear
                        
                        $log_type {string} Tipo de mensaje [NOTICE, WARNING, INFO, ERROR, etc]
                        
            Return: True on success False on failure
        
        */  
        public function store($topic = '', $msg = '', $log_type = 'NOTICE', $extraData = NULL ) 
        {
          try {
                // Check parameters
                if( empty($topic) ) {
                    log_message('ERROR', 'Missing parameter topic in library mylog');
                    return false;
                }
                if( empty($msg) ) {
                    log_message('ERROR', 'Missing parameter msg in library mylog');
                    return false;
                }
                
                 $CI = &get_instance();

                if ($msg)
                    $msg = $CI->db->escape($msg);
                if ($extraData)
                    $extraData = $CI->db->escape($extraData);
                               
                $isloggedin = $CI->ion_auth->logged_in();
        
                if ( $isloggedin ) {        
                    $userID = $CI->ion_auth->user()->row()->id;
                } else {
                    $userID = NULL;
                }

                // Send data to mysql
                $sql_query = "INSERT INTO $this->table_name SET topic = '$topic', user_id = $userID, message = $msg, log_type = '$log_type', extra_data = $extraData" ;
                return $CI->db->simple_query( $sql_query );              

           } catch( \Exception $e ) { 
                $message = 'An error occurred: '.$e;
                log_message('ERROR', $message);
                $response = array( 'success' => false, 'responseText' => $message );
                return $response;
           }
        }       
}