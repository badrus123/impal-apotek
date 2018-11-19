<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('promo_model');
        }

        public function index()
        {  		
                $promo = array(
                        'title' => 'Data promo 10%',
                        'promo_10' => $this->promo_model->get_diskon_10(),
                        'promo_50' => $this->promo_model->get_diskon_50()
                        );      
                        
                $this->load->view('promo', $promo);
        }
}