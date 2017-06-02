<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{



    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('captcha');
        $this->load->helper('string');

    }

    /**
     * If admin user is not logged in then this method will get called to load login form
     *
     * @return void
     */


    public function index(){

        $this->load->view('admin/login');
    }



}