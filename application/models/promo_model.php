<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class promo_model extends CI_Model
{    
	public function get_diskon_10()
	{
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where('promo_obat < 50');

        $query = $this->db->get();
        return $query;
        }

        public function get_diskon_50()
	{
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where('promo_obat > 50');

        $query = $this->db->get();
        return $query;
	}

	
}

?>