<?php

class Team extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->render('team/index');  
    }
    public function view($id,$pic=0) {
        $this->view->id=$id;
        $this->view->viewProject=$this->model->viewProject($id);
        $this->view->picsProject=$this->model->picsProject($id);
        $this->view->render('team/index');
    }
    

}