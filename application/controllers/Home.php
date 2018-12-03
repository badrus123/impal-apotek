<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
            parent::__construct();            
            $this->load->helper('url');
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

        public function unggah(){
                $this->load->library('upload');
                $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
                $config['upload_path'] = './pengambilan/'; //path folder
                $config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size'] = 5000; //maksimum besar file 2M
                $config['max_width']  = 5000; //lebar maksimum 1288 px
                $config['max_height']  = 2000; //tinggi maksimu 768 px
                $config['file_name'] = $nmfile; //nama yang terupload nantinya
         
                $this->upload->initialize($config);
                 if($_FILES['foto_pengambilan']['name'])
                {
                     
                    if ($this->upload->do_upload('foto_pengambilan'))
                    {
                        $gbr = $this->upload->data();
                        $inputFileName = 'gambar/'.$gbr['file_name'];
                        $data = array(
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'hari_pengambilan' => $this->input->post('hari_pengambilan'),
                        'jam_pengambilan' => $this->input->post('jam_pengambilan'),
                        'no_telepon' => $this->input->post('no_telepon'),
                        'foto_pengambilan' => $gbr['file_name'],                         
                        );
        
         
                        $this->home_model->create_data($data); //akses model untuk menyimpan ke database
                        //pesan yang muncul jika berhasil diupload pada session flashdata
                        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                        redirect('Home'); //jika berhasil maka akan ditampilkan view vupload
                    }else{
                        //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                        $er_upload=$this->upload->display_errors();
                       echo '<script type="text/javascript"> alert("Tipe File Tidak Sama/Ukuran File Terlalu Besar") 
                        window.location = "'.base_url().'Home'.'" </script>';
                        //redirect('battery'); //jika gagal maka akan ditampilkan form upload
                    }
                }
            }

}