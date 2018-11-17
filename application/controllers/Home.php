<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('home_model');
        }

        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->home_model->get_data()
                        ); 
                             
                $this->load->view('home', $data);
        }
}