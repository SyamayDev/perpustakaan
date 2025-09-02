<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $this->load->view('v_admin');
    }
}
