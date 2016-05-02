<?php
class user_model extends CI_Model {

    private $table;

    function __construct() {
        parent::__construct();
        $this->table = 'users';
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
