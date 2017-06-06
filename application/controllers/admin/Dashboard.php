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
            $this->load->view('admin/dashboard');
        } else {
            redirect('admin/login');
            //redirect('login');
        }
    }



    /**
     * This method will show default dashboard content.
     *
     * @return void
     */

    public function view($page = 'home')
    {

       /* if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }*/
        echo "here";die;
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('admin/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}