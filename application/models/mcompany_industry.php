<?php 
/*
* author: Nguyễn Xuân Trường (nxthd1991@gmail.com)
* Address: Hải Dương
* file: model(mcompany_industry.php)
*/
class Mcompany_industry extends CI_Model{
    protected $_table = "company_industry";
    public function __construct(){
        parent::__construct();
    }
    public function listCompanyIndustry(){
        return $this->db->get($this->_table)->result_array();
    }
}