<?php

class Live extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->view->controller = $this;
        $this->view->render('live/index');
    }
    
    public function show($id){
        $this->view->currentCode = $id;
        $this->view->render('live/show');
    }
}
