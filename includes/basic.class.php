<?php

    include_once('includes/config.class.php');

    class basic{
        public static function htmlHeader(){
            print '
                <html>
                    <head>
                        <title>'.config::appTitle.' '.config::appVersion.'.'.config::appRevision.'</title>
                        <link rel="stylesheet" type="text/css" href="css/'.config::appTheme.'/'.config::appTheme.'.css" />
                        <link rel="stylesheet" type="text/css" href="css/'.config::cssBootstrap.'" />
                        <script src="js/'.config::jsBootstrap.'" />
                    </head>
                    <body>
            ';
        }
        
        public static function htmlFooter(){
            print '
                    </body>
                </html>
            ';
        }
    }