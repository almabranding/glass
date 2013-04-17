<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('index/js/custom.js','index/js/jquery.ez-bg-resize.js');
    }
    
    function index() {
        if(Auth::handleLogin()) header('location: '.URL.'building/view/gallery');
        $this->view->render('index/index',true);
    }
    
}