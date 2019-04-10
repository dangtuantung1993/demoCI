<?php 
/*
* author: Nguyễn Xuân Trường (nxthd1991@gmail.com)
* Address: Hải Dương
*/
class Memployment_type extends CI_Model{
    protected $_table = "employment_type";
    public function __construct(){
        parent::__construct();
    }
    public function getList(){
        return $this->db->get($this->_table)->result_array();
    }
}