<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('keranjang_model');
            $this->load->model('obat_model');
        }

        public function index($id_obat)
        {  	
                $item['obat'] = $this->keranjang_model->get_data($id_obat);	
                $data = array(
                        'id_obat' => $id_obat,
                        'title' => 'Data obat',
                        'transaksi' => $item['obat']
                        );       
                $this->load->view('keranjang',$data);
        }
        
        public function add($id_obat){
                $item['obat'] = $this->keranjang_model->get_data($id_obat);
                $order = $this->input->post('order');
                $harga_total = $order * 10000;
                $id_obat = $item['obat'];
                $data = array(
                        "order"=>$order,
                        "harga_total"=>$harga_total,
                        "id_obat"=>$id_obat['obat'] );
                $this->keranjang_model->insert_data($data,'transaksi');
                
                redirect('Home/index');
        }
}