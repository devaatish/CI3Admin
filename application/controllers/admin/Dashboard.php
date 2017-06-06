<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    /**
     * Since this controller is set as the default controller in admin, this method will check admin user is logged in
     * or not.
     *
     * If admin user is not logged in then user will redirect to login
     *
     * @return void
     */

    public function index()
    {
        if($this->session->userdata('logged_in')){
            $this->load->view('templates/header');
            $this->load->view('templates/left_sidebar.php');
            $this->load->view('admin/dashboard');
            $this->load->view('templates/footer');
        } else {
            redirect('admin/login');
        }
    }



    /**
     * This method will show default dashboard content.
     *
     * @return void
     */

    public function view($page = 'home')
    {


    }
}