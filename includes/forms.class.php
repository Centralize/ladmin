<?php

    class forms{
        public static function frmLogin() {
            print '
                <div class="mb-3">
                    <label for="loginFormInput" class="form-label">Username</label>
                    <input type="text" class="form-control" id="loginFormInput" placeholder="Username" />
                </div>
                <div class="mb-3">
                    <label for="loginFormInput" class="form-label">Username</label>
                    <input type="password" class="form-control" id="loginFormInput" placeholder="Password" />
                <div>
            ';
        }
    }