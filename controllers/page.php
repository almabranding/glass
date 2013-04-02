<?php

class Page extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->render('index/index');
    }
    function view($url) {
        $this->model->url=$url;
        $this->view->url=$url;
        $this->view->page=$this->model->getPage($url);
        $this->view->render('page/index');
    }
    
}