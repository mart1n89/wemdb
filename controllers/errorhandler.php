<?php

class ErrorHandler extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->msg = 'This page does not exist';
        $this->view->render('errorhandler/index');
    }
}

?>