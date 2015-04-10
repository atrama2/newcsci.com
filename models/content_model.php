<?php

class Content_Model extends Model {
	private $_page = 1;
	private $_itemPerPage = 2;
	private $_offset = NULL;
	private $_sql = NULL;
	private $_rowCount = NULL;
	private $_pageCount = 0;
	private $_result = NULL;
	
	public function __construct()
    {
        parent::__construct();
    }
    
    public function contentList()
    {
		$today = date("Y-m-d H:i:s");
    	if(!empty($_GET['page'])){
			$this->_page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
			if(false === $this->_page) {
				$this->_page = 1;
			}
		}
		$this->_offset = ($this->_page - 1) * $this->_itemPerPage;
		$this->_sql = "SELECT * FROM contents WHERE '" . $today . "' >= public_date AND '" . $today . "' <= expire_date LIMIT " .$this->_offset.",".$this->_itemPerPage;
		
        return $this->db->select($this->_sql);
    }
    
    public function pagination(){
		$today = date("Y-m-d H:i:s");
		$this->_sql = "SELECT * FROM contents WHERE '" . $today . "' >= public_date AND '" . $today . "' <= expire_date";
		$this->_rowCount = count($this->db->select($this->_sql));
		if (0 === $this->_rowCount) {
			
		} else {
			$this->_pageCount = (int)ceil($this->_rowCount / $this->_itemPerPage);
			if($this->_page > $this->_pageCount){
				$this->_page = 1;
			}
		}
		$this->_result = array(
			"pageCount" => $this->_pageCount,
			"page" => $this->_page,
			"rowCount" => $this->_rowCount,
			);
		return $this->_result;
		
	}
    
}