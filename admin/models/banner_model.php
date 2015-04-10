<?php

class Banner_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
	
	public function create($data)
	{
		$this->db->insert('banners', array(
			'bnr_name' => $data['bnr_name'],
			'bnr_alt' => $data['bnr_alt'],
			'bnr_sort' => $data['bnr_sort'],
			'bnr_img' => $data['bnr_img'],
			'bnr_status' => $data['bnr_status'],
			'pub_date' => $data['pub_date'],
			'exp_date' => $data['exp_date']
		));
		
	}
	
	public function bannerList()
	{
		return $this->db->select("SELECT * FROM banners");
	}

}