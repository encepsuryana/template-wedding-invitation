<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_guestbook extends CI_Model 
{
	public function get_setting_data()
	{
		$query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
		return $query->first_row('array');
	}

	public function show()
	{
		 $sql = "SELECT * FROM tbl_guestbook ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
	}

    function guestbook_check($id)
    {
        $sql = 'SELECT * FROM tbl_guestbook WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_guestbook WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

	 function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_guestbook');
    }

     function add($data) {
        $this->db->insert('tbl_guestbook',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_guestbook',$data);
    }
}