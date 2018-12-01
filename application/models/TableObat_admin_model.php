<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class TableObat_admin_model extends CI_Model
{    
	private $table = "obat";
	public function get_data()
	{
		$this->db->select('*');
        $this->db->from('obat');

        $query = $this->db->get();
        return $query;
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
    

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	
}

?>