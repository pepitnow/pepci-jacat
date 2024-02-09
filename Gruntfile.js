module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            main_js: {
                src: [
                    'deps/jquery1.12.5-pre/jquery.js',
                    'deps/bootstrap3.4.1/dist/js/bootstrap.js',
                ],
                dest: 'public/assets/js/main.bundle.js',
                nonull: true
            },
            main_css: {
                src: [
                    'deps/bootstrap3.4.1/dist/css/bootstrap.css',
                    'deps/fontawesome4.7.0/css/font-awesome.css',
                    'assets/css/front-office.css',
                ],
                dest: 'public/assets/css/main.bundle.css',
                nonull: true
            },
            admin_js: {
                src: [
                    // 'deps/jquery1.12.5-pre/jquery.js',
                    'deps/AdminLTE2.4.18/bower_components/jquery/dist/jquery.js',
                    'deps/jquery-migrate-3.4.1/dist/jquery-migrate-3.4.1.js',
                    'deps/AdminLTE2.4.18/dist/js/adminlte.js',
                    'deps/bootstrap3.4.1/dist/js/bootstrap.js',
                    'deps/awesomplete1.15/awesomplete.js',
                    'deps/jquery-loading-overlay2.1.7/loadingoverlay.js',
                    'deps/jquery-serialize-object2.5.0/jquery.serialize-object.js',
                    'deps/spectrum-2023-04-10/spectrum.js',
                    'deps/Sortable-1.9.0/Sortable.js',
                    'deps/AdminLTE2.4.18/bower_components/fastclick/lib/fastclick.js',
                    'deps/AdminLTE2.4.18/bower_components/jquery-slimscroll/jquery.slimscroll.js',
                    //'assets/dist/admin.min.js',
                    'assets/js/admin.js'
                ],
                dest: 'public/assets/js/main.admin.bundle.js',
                nonull: true
            },
            admin_css: {
                src: [
                    'deps/AdminLTE2.4.18/dist/css/AdminLTE.css',
                    'deps/AdminLTE2.4.18/dist/css/skins/_all-skins.css',
                    'deps/fontawesome4.7.0/css/font-awesome.css',
                    'deps/bootstrap3.4.1/dist/css/bootstrap.css',
                    'deps/awesomplete1.15/awesomplete.css',
                    'deps/ionicons2.0.1/css/ionicons.css',                    
                    'deps/spectrum-2023-04-10/spectrum.css',
                    'assets/css/admin.css'
                ],
                dest: 'public/assets/css/main.admin.bundle.css',
                nonull: true
            }
        },
        uglify: {
            main_js: {
                src: 'public/assets/js/main.bundle.js',
                dest: 'public/assets/js/main.bundle.min.js',
                nonull: true
            },
            admin_js: {
                src: 'public/assets/js/main.admin.bundle.js',
                dest: 'public/assets/js/main.admin.bundle.min.js',
                nonull: true
            }
        },
        cssmin: {
            options:{noRebase: true, // whether to skip URLs rebasing
            root: '/public'},            
            main: {
                src: 'public/assets/css/main.bundle.css',
                dest: 'public/assets/css/main.bundle.min.css',
                nonull: true
            },
            admin: {
                src: 'public/assets/css/main.admin.bundle.css',
                dest: 'public/assets/css/main.admin.bundle.min.css',
                nonull: true
            }
        },
        copy: {
            main: {
              files: [
                {expand: true, cwd: 'deps/bootstrap3.4.1/fonts/', src: ['**'], dest: 'public/assets/fonts/', filter: 'isFile'},
                {expand: true, cwd: 'deps/fontawesome4.7.0/fonts/', src: ['**'], dest: 'public/assets/fonts/', filter: 'isFile'},
                {expand: true, cwd: 'deps/ionicons2.0.1/fonts/', src: ['**'], dest: 'public/assets/fonts/', filter: 'isFile'},
              ],
              nonull: true
            },
          },
    }),
  
    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');

    // 4. Where we tell Grunt what to do when we type 'grunt' into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'cssmin', 'copy']);

};