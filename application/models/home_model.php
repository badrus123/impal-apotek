<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class home_model extends CI_Model
{    
	public function get_data()
	{
		$this->db->select('*');
        $this->db->from('obat');

        $query = $this->db->get();
        return $query;
	}

	
}

?>