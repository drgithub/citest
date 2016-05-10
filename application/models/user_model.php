<?php

class user_model extends CI_Model {

    private $table;

    function __construct() {
        parent::__construct();
        $this->table = 'users';
    }

    function login($data) {
        $this->load->helper('security');
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $result = $this->db->query($sql, array($data['email'], do_hash($data['password'])));
        if ($result->num_rows() > 0) {
            $out = $result->row_array();
            $row = array(
                'fname' => $out['fname'],
                'mname' => $out['mname'],
                'lname' => $out['lname'],
                'address' => $out['address'],
                'email' => $out['email']);
            return $row;
        } else {
            return false;
        }
    }

    function insert($data) {
        $this->load->helper('security');
        $user = array(
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'mname' => $data['mname'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => do_hash($data['password'])
        );
        $result = $this->db->insert($this->table, $user);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
