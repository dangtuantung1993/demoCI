<?php
class Mweb_news extends MY_Model{
    protected $_table = 'vi_news';
    protected $_pk = 'id';

    public function __construct(){
        parent::__construct();
    }

    public function upload_image($id){
    	$file = dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/public/backend/images/'.$this->session->userdata('username').'/';
    	if( !is_dir($file) ){
    		mkdir($file);
    	}
        $config['upload_path'] = $file;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10240';
        $config['overwrite'] = TRUE;

		$this->load->library('upload', $config);
        
        // Nếu upload thành công 
		if ($this->upload->do_upload('avatar_news'))
		{
            $data = $this->upload->data();
            $image = $file.$id.'_'.rand(1000, 1000000).$data['file_ext'];
            $savename = str_replace($file, 'public/backend/images/'.$this->session->userdata('username').'/', $image);
            rename($data['full_path'], $image );
            $this->update(array('image' => $savename), "id = $id");
            
            
            
		} else{
            return false;
        }
    }
}