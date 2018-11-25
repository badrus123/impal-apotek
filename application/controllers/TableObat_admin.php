<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TableObat_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('TableObat_admin_model');
        }
        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->TableObat_admin_model->get_data()
                        ); 
                $this->load->view('Admin/tableObat_admin',$data);
        }
}