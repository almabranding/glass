<?php

class Building extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array(
            'building/js/modernizr.custom.17475.js',
            'building/js/jquerypp.custom.js',
            'building/js/jquery.elastislide.js',
            'building/js/jquery.masonry.js',
            'building/js/custom.js');
    }
    
    function index() {
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index'); 
    }
    public function view($url,$group=false) {
        $this->view->zoom=null;
        $this->view->url=$url;
        $this->view->page=$this->model->getPage($url);
        $this->view->rel=$this->model->getRel($group);
        $grupo=$this->model->getGroup($group);
        if($group) $this->view->gallery=$this->model->getGalleryByGroup($group,$this->view->page['id']);
        else $this->view->gallery=$this->model->getGallery($this->view->page['id']);
        $this->view->section=($group)?$grupo['name']:$this->view->page['name'];
        $this->view->render('building/index');
    }
    public function getFullScreen($page,$img) {
        $json=json_encode($this->model->getFullScreen($page,$img));
        echo $json;
    }
    public function getGroups($group,$page) {
        echo ($this->model->getGroups($group,$page));
    }
    

}