<?php

    class forms{
        public static function frmLogin() {
            print '
                <div class="mb-3">
                    <label for="loginFormInput" class="form-label">Username</label>
                    <input type="text" class="form-control" id="loginFormInput" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="loginFormInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginFormInput" placeholder="Password">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Validate</button>
                </div>
            ';
        }
        
        public static function form($todo,$action=null,$method=null) {
            switch($todo){
                case 'start':
                    print '<form action="'.$action.'" method="'.$method.'">';
                    break;
                case 'stop':
                    print '</form>';
                    break;
                default:
                    break;
            }
        }
    }