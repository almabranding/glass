<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index() {

        if (Auth::handleLogin()) {
            $attr = array(
                'col' => 'name',
                'id' => 'Home'
            );
            $template = $this->model->getTemplatebyCol($attr);
            $attr = array(
                'col' => 'template',
                'id' => $template['id']
            );
            $this->view->page = $this->model->getPageByCol($attr);
            $this->view->gallery = $this->model->getGallery($this->view->page['id']);
            $this->view->js = array('index/js/front.js','index/js/jquery.ez-bg-resize.js');
            $this->view->render('index/loged');
        } else {
            $attr = array(
                'col' => 'name',
                'id' => 'Splash'
            );
            $template = $this->model->getTemplatebyCol($attr);
            $attr = array(
                'col' => 'template',
                'id' => $template['id']
            );
            $this->view->page = $this->model->getPageByCol($attr);
            $this->view->gallery = $this->model->getGallery($this->view->page['id']);
            $this->view->js = array('index/js/custom.js', 'index/js/jquery.ez-bg-resize.js');
            $this->view->render('index/index', true);
        }
    }

}