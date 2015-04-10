<?php

class HOME_Model extends Model {
	
	public function __construct()
    {
        parent::__construct();
    }
	
	public function bannerSlider()
	{
		$today = date("Y-m-d H:i:s");
		return $this->db->select("SELECT * FROM banners WHERE bnr_status = 'enable' AND '" . $today . "' >= pub_date AND '" . $today . "' <= exp_date ORDER BY bnr_sort ASC");
	}
    
}