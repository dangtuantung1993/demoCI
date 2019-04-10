<?php 
/*
* author: Nguyễn Xuân Trường (nxthd1991@gmail.com)
* Address: Hải Dương
*/
class Mslider extends CI_Model{
    protected $_table = "vi_slider";
    public function __construct(){
        parent::__construct();
    }
    public function listSlider(){
    	$this->db->where('status',1);
    	$this->db->order_by('sort','ASC');
    	return $this->db->get($this->_table)->result_array();
    }
    public function listImagesHome(){
    	$this->db->where('status',1);
    	$this->db->order_by('sort','ASC');
    	return $this->db->get('vi_images')->result_array();
    }
    public function getInfoHomePage(){
    	$this->db->where('id',1);
    	return $this->db->get('vi_infohomepage')->row_array();
    }
    
}