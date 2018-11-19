<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();

        }
        public function index()
        {  		
                $this->load->view('Admin/message_admin');
        }
}