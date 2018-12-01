<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TableObat_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('TableObat_admin_model');
            $this->load->helper('url');
            $this->load->library('form_validation');
        }
        public function index()
        {  		
                $data = array(
                        'title' => 'Data obat',
                        'obat' => $this->TableObat_admin_model->get_data()
                        ); 
                $this->load->view('Admin/tableObat_admin',$data);
        }

        function editData(){
                 $data = array(
                     'id_obat' => $this->input->post('id_obat'),
                     'nama_obat' => $this->input->post('nama_obat'),
                     'type_obat' => $this->input->post('type_obat'),
                     'harga_obat' => $this->input->post('harga_obat'),
                     'promo_obat' => $this->input->post('promo_obat'),
                     'sisa_obat' => $this->input->post('sisa_obat'),
                     'deskripsi_obat' => $this->input->post('deskripsi_obat'),
                     'produk_obat' => $this->input->post('produk_obat')                           
                 );
                
                 $where = array(
                'id_obat' => $id_obat
                 );
             
                $this->TableObat_admin_model->update_data($where,$data,'obat');
                 redirect('TableObat_admin/index');
         }
        
        function hapus($id_obat){
                $where = array('id_obat' => $id_obat);
                $this->TableObat_admin_model->hapus_data($where,'obat');
                redirect('TableObat_admin/index');
        }
}