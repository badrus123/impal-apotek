<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('promo_model');
        }

        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->promo_model->get_data()
                        );        
                        
                $this->load->view('promo', $data);
        }
}