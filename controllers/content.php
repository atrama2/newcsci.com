<?php

class Content extends Controller {

    public function __construct() {
        parent::__construct();
		$this->view->active = 'content';
    }
    
    public function index() 
    {
    	$this->view->title = 'Content';
    	$this->view->contentList = $this->model->contentList();
    	$this->view->pagination = $this->model->pagination();
    	
    	$this->view->render('header'); 
        $this->view->render('content/index');
        $this->view->render('footer');    
    }

}