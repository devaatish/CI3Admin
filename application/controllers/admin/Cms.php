<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->model('Cms_model');

    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(){

        if($this->session->userdata('logged_in')){
            //$this->load->view('test');//die;
            $data['cms_data'] = $this->Cms_model->get_cms_records();

            //echo "<pre>"; print_r($data);echo "</pre>";die;

            $this->load->view('templates/header');
            $this->load->view('templates/left_sidebar.php');
            $this->load->view('admin/cms/listing', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('admin/login');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function add_cms(){

        if($this->session->userdata('logged_in')){

            // validatation for required fields
            $this->form_validation->set_rules('page_title','Page Title','required');
            $this->form_validation->set_rules('url_key','URL Key','required');
            $this->form_validation->set_rules('page_status','Status','required');
            $this->form_validation->set_rules('page_content','Page Content','required');


            if ($this->form_validation->run() == true){

                $data['page_title']   = $this->input->post('page_title');
                $data['url_key']   = $this->input->post('url_key');
                $data['page_status']   = $this->input->post('page_status');
                $data['page_content']   = $this->input->post('page_content');
                $data['content_heading']   = $this->input->post('content_heading');
                $data['meta_keywords']   = $this->input->post('meta_keywords');
                $data['meta_desc']   = $this->input->post('meta_desc');
                $data['created_by']   = $this->session->userdata('username');
                $data['created_at']   = date('M Y h:i:s A');

                $data_inserted = $this->Cms_model->save_cms_data($data);

                if($data_inserted)
                {
                    $this->session->set_flashdata('success', 'CMS page added successfuly');
                    redirect('admin/cms');

                }
                else
                {
                    $data['error']="Please Enter Valid Username and Password..";
                    $this->load->view('admin/cms/add_cms', $data);
                }

            }else{

                $this->load->view('admin/cms/add_cms');
            }

        } else {
            redirect('admin/login');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $cms_id
     * @return void
     */
    public function edit_cms($cms_id){

        if($this->session->userdata('logged_in')){

            // validatation for required fields
            $this->form_validation->set_rules('page_title','Page Title','required');
            $this->form_validation->set_rules('url_key','URL Key','required');
            $this->form_validation->set_rules('page_status','Status','required');
            $this->form_validation->set_rules('page_content','Page Content','required');


            if ($this->form_validation->run() == true){

                $data['page_title']   = $this->input->post('page_title');
                $data['url_key']   = $this->input->post('url_key');
                $data['page_status']   = $this->input->post('page_status');
                $data['page_content']   = $this->input->post('page_content');
                $data['content_heading']   = $this->input->post('content_heading');
                $data['meta_keywords']   = $this->input->post('meta_keywords');
                $data['meta_desc']   = $this->input->post('meta_desc');
                $data['created_by']   = $this->session->userdata('username');
                $data['created_at']   = date('M Y h:i:s A');

                $data_inserted = $this->Cms_model->save_cms_data($data);

                if($data_inserted)
                {
                    $this->session->set_flashdata('success', 'CMS page added successfuly');
                    redirect('admin/cms');

                }
                else
                {
                    $data['error']="Please Enter Valid Username and Password..";
                    $this->load->view('admin/cms/add_cms', $data);
                }

            }else{

                $this->load->view('admin/cms/add_cms');
            }

        } else {
            redirect('admin/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $cms_id
     * @return void
     */
    public function update_cms( $cms_id)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param $cms_id
     * @return void
     */
    public function view_cms($cms_id){


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $cms_id
     * @return void
     */
    public function delete_cms($cms_id){


    }
}