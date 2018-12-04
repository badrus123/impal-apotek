<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('transaksi_admin_model');
            $this->load->helper('url');
        }
        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->transaksi_admin_model->get_data()
                        ); 
                $this->load->view('Admin/transaksi_admin',$data);
        }

}