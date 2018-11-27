<?php

class akun_model extends CI_Model
{
    public function daftar_akun($data)
    {
        $param = array(
            "Fullname"=>$data['fullname'],
            "Email"=>$data['email'],
            "Username"=>$data['username'],
            "Password"=>$data['password'],
        );
        $insert = $this->db->insert('user', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }

    public function login_akun($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('user');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }

    public function check_user($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);
 
        $query = $this->db->get('user');

        if($query->num_rows()== 1) {
            return $query->row(0);
        } else {
            return FALSE;
        }
    }
}