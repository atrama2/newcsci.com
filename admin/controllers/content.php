<?php

class Content extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
        //$this->view->js = array('public/tinymce/tinymce.min.js');
    }
    
    public function index() 
    {
    	$this->view->title = 'Content';
		if(!empty($_GET['orderby'])) {
			$this->view->contentList = $this->model->contentListOrderBy($_GET['orderby'], $_GET['order']);
		} else {
			$this->view->contentList = $this->model->contentList();
		}
		$this->view->order =  $this->order();
    	
    	$this->view->render('header'); 
        $this->view->render('content/index');
        $this->view->render('footer');    
    }
	
	public function order()
	{	
		$order = null;
		if (!isset($_GET['order'])) {
			$order = 'ASC';
		} else {
			if ($_GET['order'] == 'ASC') {
				$order = 'DESC';
			} else {
				$order = 'ASC';
			}
		}
		
		return $order;
	}
    
    public function add()
    {
		$this->view->title = 'Add Content';
		$this->view->categoryList = $this->model->categoryList();
		
		$this->view->render('header');
        $this->view->render('content/add');
        $this->view->render('footer');
	}
	
	public function create()
	{
		if(empty($_POST['public_time'])) {
			$public_time = date("H:i");
		} else {
			$public_time = $_POST['public_time'];
		}
		if(empty($_POST['expire_date'])) {
			$expire_date = '9999-12-31';
			$expire_time = '23:59';
		} else {
			$expire_date = $_POST['expire_date'];
			if(empty($_POST['expire_time'])) {
				$expire_time = '00:00';
			} else {
				$expire_time = $_POST['expire_time'];
			}
		}
		$data = array(
			'content_title' => $_POST['content_title'],
			'into_content' => $_POST['into_content'],
			'into_image' => $_POST['into_image'],
			'content' => $_POST['content'],
			'author' => $_POST['author'],
			'category' => $_POST['category'],
			'status' => $_POST['status'],
			'public_date' => $_POST['public_date'] . ' ' . $public_time,
			'expire_date' => $expire_date . ' ' . $expire_time,
			'hits' => '0'
		);
		$this->model->create($data);
		
	}

}