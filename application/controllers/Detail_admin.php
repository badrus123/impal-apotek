<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('Detail_admin_model');
        }

        public function index($id_obat)
        {  	
                $item['obat'] = $this->Detail_admin_model->get_data($id_obat);	
                $data = array(
                        'id_obat' => $id_obat,
                        'title' => 'Data obat',
                        'obat' => $item['obat']
                        );       
                $this->load->view('Admin/detail_admin',$data);
        }
}