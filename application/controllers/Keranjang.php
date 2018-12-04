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

        public function add(){
                $order = $this->input->post('order');
                $harga = $this->input->post('harga_obat');
                $harga_obat = $harga * $order;
                $id_obat = $this->input->post('id_obat');;
                $data = array(
                        "jumlah"=>$order,
                        "harga_total"=>$harga_obat,
                        "id_obat"=>$id_obat );
                $this->keranjang_model->input_data($data,'transaksi');
                
                redirect('Home/index');
        }
}