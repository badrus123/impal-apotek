<?php
class C_Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
    }


    public function index()
    {
        $data = array(
            'title' => 'Login',
            'filename' => 'signin'
        );
        $this->load->view('signin',$data);
    }

    public function check(){
        $data = $this->input->post(null,TRUE);
        $login_data = $this->akun_model->check_user($data);
        if($login_data){
            $this->session->set_userdata('username',$login_data->username);
            redirect('Home/index');
        } else {
            $this->session->set_flashdata('message','Gagal Login');
            redirect('Akun/index');
        }
    }

    public function daftar_view()
    {
        $this->load->view('signup');
    }

    public function daftar_akun()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->akun_model->daftar_akun($data);
        if($insert){
            $this -> session -> set_flashdata('alert','sukses_daftar');
            redirect('Akun/index');
        }else{
            echo "<script type='text/javascript'> alert('gagal daftar akun');</script>";
        }
    }

    public function add(){

    	$fullname = $this->input->post('fullname');
    	$email = $this->input->post('email');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$data = array(
    		"Fullname"=>$fullname,
            "Email"=>$email,
            "Username"=>$username,
            "Password"=>$password,
    	);
    	$this->akun_model->insert($data,'user');
    	
    	redirect('Akun/index');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Akun/index');
    }	
}
?>