<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'users');
    }

    function index() {
        $this->load->view('members_site');
    }

    function login() {
        $data = $this->input->post();
        $result = $this->users->login($data);
        if ($result) {
            $this->session->set_userdata('userlogin', $result);
            $msg = "Welcome ".$this->session->userdata['userlogin']['fname']." ".$this->session->userdata['userlogin']['lname'];
        } else {
            $msg = "The E-Mail or the Password is wrong.";
            $this->session->set_userdata('login', array('email'=>$data['email']));
        }      
        $this->session->set_userdata('notify', array('msg'=>$msg));
        redirect(base_url() . 'members');
    }
    function logout(){
        $this->session->unset_userdata('userlogin');
        redirect(base_url() . 'members');
    }
    function insert() {
        $data = $this->input->post();
        $result = $this->users->insert($data);

        if ($result) {
            $msg = "Successfully Registered!";
        } else {
            $msg = "Save Failed...";
        }
        $this->session->set_userdata('notify', array('msg' => $msg));
        redirect(base_url() . 'members');
    }

}
