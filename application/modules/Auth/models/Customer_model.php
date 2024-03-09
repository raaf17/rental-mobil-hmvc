<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function cekLogin()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)->where('password', md5($password))->limit(1)->get('customer');

        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function update_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
