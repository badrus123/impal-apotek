<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class keranjang_model extends CI_Model
{    
	public function get_data($id_obat)
	{
		$this->db->select('*');
        $this->db->from('obat');
        $this->db->where('id_obat', $id_obat);

        $query = $this->db->get();
        return $query;
    }
    
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
	
}

?>