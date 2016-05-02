<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'users');
    }

    function index() {
        $this->load->view('members_site');
    }

    function insert() {
        $data = $this->input->post();
        $result = $this->users->insert($data);

        if ($result) {
            $msg = "Successfully Registered!";
        } else {
            $msg = "Save Failed...";
        }

        $data = array('msg' => $msg);
        $this->session->set_userdata('user', $data);
        redirect(base_url().'members');
    }

}
