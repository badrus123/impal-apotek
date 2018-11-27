<?php
class Akun extends CI_Controller
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

    public function cek_login()
        {
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $this->load->model('akun_model');
         $login_akun = $this->akun_model->login_akun($username, $password);
         $user = $login_akun->result()[0];
         if ($login_akun) {
                if ($login_akun->num_rows()==0) {                    
                   redirect('Akun/index');  
                }else {     
                    $tht=$login_akun->result();          
                    $sess_data = array(
                    'logged_in' => "Sudah Login",
                    'fullname' => $users->fullname,
                    'email' => $tht[0]->email,
                    'username' => $tht[0]->username,
                    'password' => $tht[0]->password,
                    'level' => "user",
                    'User' => $item['user']
                    );
                    $this->session->set_userdata($sess_data);

                    redirect('Home/index');
                }
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
    		"fullname"=>$fullname,
            "email"=>$email,
            "username"=>$username,
            "password"=>$password,
            "foto_user"=> "https://3.bp.blogspot.com/-WPIEaxZnxzk/V2k-vQ57MlI/AAAAAAAAAUI/tAdp-dw_47IGJ9APcOJh2SSlvjB4vod4QCLcB/s1600/anonymousnih.jpg"
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