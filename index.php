<?php

    include_once('includes/basic.class.php');
    include_once('includes/design.class.php');
    include_once('includes/forms.class.php');
    
    basic::htmlHeader();
    design::content('start');
    design::position('start');
    
    print 'Login';
    
    forms::form('start', 'chklogin.php', 'POST');
    forms::frmLogin();
    forms::form('stop');
    
    design::position('stop');
    design::content('stop');
    basic::htmlFooter();