<?php

class Map extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->render('map/index');  
    }
    public function view($url,$pic=true) {
        $this->view->url=$url;
        $this->view->page=$this->model->getPage($url);
        $this->view->gallery=$this->model->getGallery($this->view->page['id']);
        $this->view->render('map/index');
    }
    

}