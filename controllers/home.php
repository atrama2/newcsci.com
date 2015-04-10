<?php

class Home extends Controller {

    function __construct() {
        parent::__construct();
		$this->view->active = 'home';
    }
    
    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        $this->view->title = 'Home';
		$this->view->bannerSlider = $this->model->bannerSlider();
        
        $this->view->render('header');
        $this->view->render('home/index');
        $this->view->render('footer');
    }
}