<?php

class Banner extends Controller {

    function __construct() {
        parent::__construct();
		$this->view->active = 'banner';
    }
    
    function index() {
    	$this->view->title = 'Banner';
		$this->view->bannerList = $this->model->bannerList();
    	
    	$this->view->render('header'); 
        $this->view->render('banner/index');
        $this->view->render('footer');    
    }
	
	public function add()
	{
		$this->view->title = 'Add Banner';
    	
    	$this->view->render('header'); 
        $this->view->render('banner/add');
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
			'bnr_name' => $_POST['name'],
			'bnr_alt' => $_POST['alt'],
			'bnr_sort' => $_POST['sort'],
			'bnr_img' => $_POST['image'],
			'bnr_status' => $_POST['status'],
			'pub_date' => $_POST['public_date'] . ' ' . $public_time,
			'exp_date' => $expire_date . ' ' . $expire_time
		);
		$this->model->create($data);
	}

}