<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_obat_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('Pengembalian_model');
        }
        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->Pengembalian_model->get_data()
                        ); 
                $this->load->view('Admin/pengembalian_obat_admin',$data);
        }
}