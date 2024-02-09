<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = $heading;
if ($message == '<p>The URI you submitted has disallowed characters.</p>')
	if (!class_exists('CI_Controller')){
		include(APPPATH . 'config/config.php');
		require_once(BASEPATH . 'libraries/Session/Session.php');
		$_session = new CI_Session();
		$lang_user = $_session->has_userdata('language') ? $_session->userdata('language') :$config["language"];
		require_once(APPPATH . 'language/'.$lang_user.'/general_lang.php');
		$title=
		$message= $lang['error_400_invalid_chars'];
		$title =  $lang['error_400_title'];
	} else {
		$CI = &get_instance();
		$message = $CI->lang->language['error_400_invalid_chars'];
		$title =  $CI->lang->language['error_400_title'];
	};
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<base href="/" />

	<title><?php echo $title;?></title>

	<meta name='author' content='pepITnow! (https://pepitnow.com)'>
<meta name='description' content='PepCI JACAT'>
<link href='/assets/dist/app.min.css' rel='stylesheet' media='screen'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
	<link rel="manifest" href="manifest.json" />
</head>
<body class=""><div class="container">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="">PepCI JACAT</a>
	</div>

	<div class="navbar-collapse collapse">

		<ul class="nav navbar-nav">
							</ul>

					<ul class="nav navbar-nav navbar-right">
								
			</ul>
				
	</div>

</div>
</nav>	<section class="content">
				<style>
    .section-center__full {
        height: 20vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section id="header">
    <div class="container-fluid ">
        <div class="row">
            <h3 class="section-center__full">Error <?php echo $status_code ?></h3>
        </div>
        <div class="row">
            <h2 class="text-center"><?php echo $message;?>
			</h2>
        </div>
        <br>
        <div class="row" style="display: flex;  justify-content: center;">
        <button class="btn btn-primary hBack center" type="button" onclick="history.back(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Volver atrás </button>
        </div>
    </div>

</section>	</section>
</div>

	

		</body>
</html>