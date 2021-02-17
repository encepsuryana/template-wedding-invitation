<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wedding extends CI_Model 
{
	public function get_setting_data()
	{
		$query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
		return $query->first_row('array');
	}

	public function show()
	{
		$query = $this->db->query("SELECT * from tbl_wedding WHERE id=1");
		return $query->first_row('array');
	}

	 public function update($data)
	{
        $this->db->where('id',1);
        $this->db->update('tbl_wedding',$data);
    }
}