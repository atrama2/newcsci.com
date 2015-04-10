<?php

class Content_Model extends Model {
	
	public function __construct()
    {
        parent::__construct();
    }
    
    public function contentList()
    {
        return $this->db->select('SELECT contents.content_id, contents.content_title, contents.status, category.category_name, public_date, expire_date, hits FROM contents JOIN category ON contents.category=category.category_id');
    }
	public function contentListOrderBy($orderby, $order)
    {
        return $this->db->select('SELECT contents.content_id, contents.content_title, contents.status, category.category_name, public_date, expire_date, hits FROM contents JOIN category ON contents.category=category.category_id ORDER BY '.$orderby.' '.$order);
    }
    
	public function categoryList()
	{
		return $this->db->select('SELECT * FROM category');
	}
	
	public function create($data)
	{
		$this->db->insert('contents', array(
			'content_title' => $data['content_title'],
			'into_content' => $data['into_content'],
			'into_image' => $data['into_image'],
			'content' => $data['content'],
			'author' => $data['author'],
			'category' => $data['category'],
			'status' => $data['status'],
			'public_date' => $data['public_date'],
			'expire_date' => $data['expire_date'],
			'hits' => $data['hits']
		));
		
		//return 'model';
	}
}
