<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class home_model extends CI_Model
{    
	public $table = 'pengambilan_obat';
    public $order = 'DESC';
	public function get_data()
	{
		$this->db->select('*');
        $this->db->from('obat');

        $query = $this->db->get();
        return $query;
	}
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

        function create_data($data)
    {
        $this->db->insert($this->table, $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else{
            return false;
        }
    }
        function valid_id($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        if ($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
}

?>