<?php

    include_once('includes/basic.class.php');
    include_once('includes/design.class.php');
    include_once('includes/forms.class.php');
    
    basic::htmlHeader();
    design::content('start');
   
    design::position('start');
    forms::frmLogin();
    design::position('stop');
    
    design::content('stop');
    basic::htmlFooter();