<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class transaksi_admin_model extends CI_Model{   

    public $table = 'transaksi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
    public function get_data()
	{
		$this->db->select('*');
        $this->db->from('transaksi');

        $query = $this->db->get();
        return $query;
	}


}
?>