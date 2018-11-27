<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_admin_model extends CI_Model
{    
	public function get_data($id_obat)
	{
		$this->db->select('*');
        $this->db->from('obat');
        $this->db->where('id_obat', $id_obat);

        $query = $this->db->get();
        return $query;
	}

	
}

?>