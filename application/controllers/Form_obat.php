<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_obat extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('obat_model');
            $this->load->helper('url');
            $this->load->library('form_validation');
        }
        public function index()
        {  		
                $this->load->view('Admin/form_obat');
        }
        public function unggah(){
                $this->load->library('upload');
                $this->load->library('form_validation');
                $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
                $config['upload_path'] = './obat/'; //path folder
                $config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size'] = 5000; //maksimum besar file 2M
                $config['max_width']  = 2000; //lebar maksimum 1288 px
                $config['max_height']  = 2000; //tinggi maksimu 768 px
                $config['file_name'] = $nmfile; //nama yang terupload nantinya
         
                $this->upload->initialize($config);
                 if($_FILES['image']['name'])
                {
                     
                    if ($this->upload->do_upload('image'))
                    {
                        $gbr = $this->upload->data();
                        $inputFileName = 'gambar/'.$gbr['file_name'];
                        $data = array(
                            'id_obat' => $this->input->post('id_obat'),
                            'nama_obat' => $this->input->post('nama_obat'),
                            'type_obat' => $this->input->post('type_obat'),
                            'harga_obat' => $this->input->post('harga_obat'),
                            'promo_obat' => $this->input->post('promo_obat'),
                            'sisa_obat' => $this->input->post('sisa_obat'),
                            'deskripsi_obat' => $this->input->post('deskripsi_obat'),
                            'image' => $gbr['file_name'],
                            'produk_obat' => $this->input->post('produk_obat')                           
                        );
                        $this->obat_model->create_data($data); //akses model untuk menyimpan ke database
                        //pesan yang muncul jika berhasil diupload pada session flashdata
                        redirect('Form_obat'); //jika berhasil maka akan ditampilkan view vupload
                    }else{
                        //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                        $er_upload=$this->upload->display_errors();
                       echo '<script type="text/javascript"> alert("Tipe File Tidak Sama/Ukuran File Terlalu Besar") 
                        window.location = "'.base_url().'Form_obat'.'" </script>';
                        //redirect('battery'); //jika gagal maka akan ditampilkan form upload
                    }
                }
            }
        
             public function rules() 
            {
                $this->form_validation->set_rules('id_obat', 'id_obat', 'trim|required|callback_valid_id');
                $this->form_validation->set_rules('nama_obat', 'nama_obat', 'trim|required');
                $this->form_validation->set_rules('type_obat', 'type_obat', 'trim|required');
                $this->form_validation->set_rules('harga_obat', 'harga_obat', 'trim|required');
                $this->form_validation->set_rules('promo_obat', 'promo_obat', 'trim|required');
                $this->form_validation->set_rules('sisa_obat', 'sisa_obat', 'trim|required');
                $this->form_validation->set_rules('deskripsi_obat', 'deskripsi_obat', 'trim|required');
                $this->form_validation->set_rules('image', 'image', 'trim|required');
                $this->form_validation->set_rules('produk_obat', 'produk_obat', 'trim|required');
                $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
                redirect('Form_obat');
            }
        
            function valid_id($id_obat)
                {
                    if ($this->obat_model->valid_id($id_obat) == TRUE)
                    {
                        
                        // echo 'valid_id', "kode guruadm dengan Kode $kodeguru sudah terdaftar";
                        $this->form_validation->set_message('valid_id', "id dengan $id_obat sudah terdaftar");
                        return FALSE;
                    }
                    else
                    {
                        return TRUE;
        
                    }
                }
}