<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('home_admin_model');
        }
        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->home_admin_model->get_data()
                        ); 
                $this->load->view('Admin/home_admin',$data);
        }
}