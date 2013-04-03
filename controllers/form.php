<?php

class Form extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function register() {
        $this->model->register();
        header('location: ' . URL . 'login');
    }
    
}