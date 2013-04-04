<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        if(Auth::handleLogin()) header('location: building/view/building');
        $this->view->render('index/index',true);
    }
    
}