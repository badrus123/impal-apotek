<?php

class loginadmin_model extends CI_Model
{
    public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }

    public function login_adm($data){
        $this->db->select('*');
        $this->db->from('admin');
        $result = $this->db->get();
        return $result;
    }

    public function check_user($data)
    {
        $this->db->where('id_admin', $data['id_admin']);
        $this->db->where('password', $data['password']);
 
        $query = $this->db->get('admin');

        if($query->num_rows()== 1) {
            return $query->row(0);
        } else {
            return FALSE;
        }
    }
}