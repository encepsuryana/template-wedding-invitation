<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model 
{

    public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }

    function check_username($username) 
    {
        $where = array(
           'username' => $username
       );
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function check_password($username,$password)
    {      
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }
}