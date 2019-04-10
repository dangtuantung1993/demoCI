<?php
class Home extends MainController{
    protected $_data;
    public function __construct(){
        parent::__construct();
        // load address province

    }
    public function index(){
        $this->_data['loadPage'] = "home/index_view";
        $this->load->model('Mslider');
        $this->load->model('Mproduct');
        $this->load->model('Mnews');


        $this->_data['slider']=$this->Mslider->listSlider();
        $this->_data['imageshomepage']=$this->Mslider->listImagesHome();

        $this->load->view($this->_data['path'],$this->_data);
    }

}