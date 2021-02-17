<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model 
{

    public function get_undangan_data()
    {
        $query = $this->db->query("SELECT * from tbl_wedding WHERE id=1");
        return $query->first_row('array');
    }

    public function get_guestbook_data()
    {
        $query = $this->db->query("SELECT * from tbl_guestbook ORDER BY id DESC");
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_guestbook',$data);
        return $this->db->insert_id();
    }
}