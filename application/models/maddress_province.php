<?php 
/*
* author: Nguyễn Xuân Trường (nxthd1991@gmail.com)
* Address: Hải Dương
*/
class Maddress_province extends CI_Model{
    protected $_table = "address_province";
    public function __construct(){
        parent::__construct();
    }
    public function getList(){
        return $this->db->get($this->_table)->result_array();
    }
    public function getRowWhereProvinceId($provinces){
    	$this->db->where('provinceid',$provinces);
    	return $this->db->get($this->_table)->row_array();
    }
}