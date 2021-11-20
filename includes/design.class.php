<?php

    class design{
        public static function content($todo) {
            switch($todo){
                case 'start':
                    print '<div class=".container-xl">';
                    break;
                case 'stop':
                    print '</div>';
                    break;
                default:
                    break;
            }
        }
        
        public static function position($todo) {
            switch($todo){
                case 'start':
                    print '<div class="loginform-position">';
                    break;
                case 'stop':
                    print '</div>';
                    break;
                default:
                    break;
            }
        }
    }