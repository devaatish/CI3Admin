<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

    /**
     * Create a new controller instance.
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
            $this->form_validation->set_rules('url_key','URL Key','required|callback_url_key_check');
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
                    $data['error']="Database error in adding CMS page";
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
     * Show the form for edit and update the specified resource.
     *
     * @param int $cms_id
     * @return void
     */
    public function edit_cms($cms_id){

        //echo $cms_id;die;
        if($this->session->userdata('logged_in')){

            // validatation for required fields
            $this->form_validation->set_rules('page_title','Page Title','required');
            $this->form_validation->set_rules('url_key','URL Key','callback_url_key_check');
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
                $data['updated_by']   = $this->session->userdata('username');
                $data['updated_at']   = date('M Y h:i:s A');

                $data_updated = $this->Cms_model->update_cms_row_by_id($data, $cms_id);

                if($data_updated)
                {
                    $this->session->set_flashdata('success', 'CMS page updated successfuly');
                    redirect('admin/cms');

                }
                else
                {
                    $data['error']="Database error in updating cms page";
                    $this->load->view('admin/cms/edit_cms', $data);
                }

            }else{
                $cms_data_array = $this->Cms_model->get_cms_row_by_id($cms_id);

                //echo "<pre>"; print_r($cms_data_array); echo "</pre>";die;
                //$cms_data = [];
                if(!empty($cms_data_array)){

                    foreach ($cms_data_array as $value) {

                        $data['cms_data'] = [
                            'cms_id' => $value->cms_id,
                            'page_title' => $value->page_title,
                            'url_key' => $value->url_key,
                            'page_status' => $value->page_status,
                            'page_content' => $value->page_content,
                            'content_heading' => $value->content_heading,
                            'meta_keywords' => $value->meta_keywords,
                            'meta_desc' => $value->meta_desc,
                        ];
                    }
                    $this->load->view('admin/cms/edit_cms',$data);
                    return false;
                }

                $this->session->set_flashdata('error', 'Database Error');
                redirect('admin/cms');
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

        $cms_data_array = $this->Cms_model->get_cms_row_by_id($cms_id);

        //echo "<pre>"; print_r($cms_data_array); echo "</pre>";die;
        //$cms_data = [];
        if(!empty($cms_data_array)){

            foreach ($cms_data_array as $value) {

                $data['cms_data'] = [
                    'cms_id' => $value->cms_id,
                    'page_title' => $value->page_title,
                    'url_key' => $value->url_key,
                    'page_status' => $value->page_status,
                    'page_content' => $value->page_content,
                    'content_heading' => $value->content_heading,
                    'meta_keywords' => $value->meta_keywords,
                    'meta_desc' => $value->meta_desc,
                ];
            }
            $this->load->view('admin/cms/view_cms',$data);
            return false;
        }

        $this->session->set_flashdata('error', 'Database Error');
        redirect('admin/cms');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $cms_id
     * @return void
     */
    public function delete_cms($cms_id){

        $res = $this->Cms_model->delete_cms_by_id($cms_id);
        if($res)
        {
            $this->session->set_flashdata('success', 'Your cms deleted successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Some error has occurred');
        }
        redirect('admin/cms');

    }

    /**
     * Callback function to check url key already present or not
     *
     * @return boolean
     */
    public function url_key_check($url_key)
    {
        $cms_id = $this->input->post('cms_id'); //die;
        if(!empty($cms_id)){
            $res = $this->Cms_model->check_url_key_in_edit($url_key, $cms_id);
            if($res == 1) {
                $this->form_validation->set_message('url_key_check', 'Entered {field}  already in use.');
                return false;
            }
            else{
                return true;
            }

        }else{
            $res = $this->Cms_model->check_url_key($url_key);
            if($res == 1) {
                $this->form_validation->set_message('url_key_check', 'Entered {field}  already in use.');
                return false;
            }
            else{
                return true;
            }
        }

    }
}