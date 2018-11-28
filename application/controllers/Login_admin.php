<?php
class Login_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginadmin_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'login',
            'filename' => 'loginadmin'
        );
        $this->load->view('loginadmin',$data);
    }

    public function cek_login()
    {
         $username = $this->input->post('id_admin');
         $password = $this->input->post('password');

         $this->load->model('loginadmin_model');
         $login_adm = $this->loginadmin_model->Login_adm($id_admin, $password);
         $user = $login_adm->result()[0];
         if ($login_adm) {
                if ($login_adm->num_rows()==0) {                    
                   redirect('Login_admin/index');  
                }else {     
                    $tht=$login_adm->result();          
                    $sess_data = array(
                    'logged_in' => "Sudah Login",
                    'id_admin' => $tht[0]->id_admin,
                    'password' => $tht[0]->password,
                    'level' => "admin",
                    'admin' => $item['admin']
                    );
                    $this->session->set_userdata($sess_data);

                    redirect('Home_admin/index');
                }
           }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Home/index');
    }
}
?>