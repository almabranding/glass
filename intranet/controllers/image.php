<?php

class Image extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->render('index/index');  
    }
    public function view($id) 
    {
        $this->view->id=$id;
        $this->view->form=$this->model->form('edit',$id);
        $this->view->img=$this->model->getInfo($id);
        $this->view->render('image/view');  
    }
    public function edit($id) 
    {
        $this->model->edit($id);
        header('location: ' . URL . 'image/view/'.$id);  
    }
    public function delete($page,$id) 
    {
        $this->model->delete($id);
        header('location: ' . URL . 'page/view/'.$page);
    }

}