<?php

/**
 * System Config
 *
 * @author    Rupesh G
 */
class System_config extends CI_Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        $this->load->helper('form');
        //$this->load->helper('string');
        $this->load->model('System_config_model');

    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(){
        if($this->session->userdata('logged_in')) {
            // check for configs records
            $configs_res = $this->System_config_model->get_config_records();
            if(count($configs_res) > 0) {
                foreach ($configs_res as $value) {

                    $data['config_data'] = [
                        'id' => $value->id,
                        'default_title' => $value->default_title,
                        'default_description' => $value->default_description,
                        'default_keywords' => $value->default_keywords,
                        'miscellaneous_scripts' => $value->miscellaneous_scripts,
                        'favicon' => $value->favicon,
                        'logo_src' => $value->logo_src,
                        'logo_alt' => $value->logo_alt,
                        'welcome_txt' => $value->welcome_txt,
                        'copyright_txt' => $value->copyright_txt,
                        'miscellaneous_html' => $value->miscellaneous_html,
                        'from_email' => $value->from_email,
                        'from_name' => $value->from_name,
                        'smtp_host' => $value->smtp_host,
                        'smtp_port' => $value->smtp_port,
                        'encryption' => $value->encryption,
                        'smtp_username' => $value->smtp_username,
                        'smtp_password' => $value->smtp_password,
                    ];
                }

                $this->load->view('admin/system_config/edit_config', $data);
            }else if($this->input->post('add_config_submit')){ // add new config record


                $data['default_title']   = $this->input->post('default_title');
                $data['default_description']   = $this->input->post('default_description');
                $data['default_keywords']   = $this->input->post('default_keywords');
                $data['miscellaneous_scripts']   = $this->input->post('miscellaneous_scripts');
                $data['logo_alt']   = $this->input->post('logo_alt');
                $data['welcome_txt']   = $this->input->post('welcome_txt');
                $data['copyright_txt']   = $this->input->post('copyright_txt');
                $data['miscellaneous_html']   = $this->input->post('miscellaneous_html');

                $data['from_email']   = $this->input->post('from_email');
                $data['from_name']   = $this->input->post('from_name');

                $data['smtp_host']   = $this->input->post('smtp_host');
                $data['smtp_port']   = $this->input->post('smtp_port');
                $data['encryption']   = $this->input->post('encryption');
                $data['smtp_username']   = $this->input->post('smtp_username');
                $data['smtp_password']   = $this->input->post('smtp_password');


                $file_types_arr = array('favicon','logo_src');
                for($i=0; $i <= count($file_types_arr); $i++) {
                    $_path = $this->upload_image($file_types_arr[$i]);
                    if ($_path) {
                        $data[$file_types_arr[$i]] = $_path;
                    } else {
                        //$data['error']= $this->upload->display_errors();
                        //$this->load->view('admin/system_config/config', $data);
                    }
                }

                $data_updated = $this->System_config_model->save_config_row($data);

                if($data_updated)
                {
                    $this->session->set_flashdata('success', 'CMS page updated successfuly');
                    redirect('admin/system_config');

                }

            }else{
                $this->load->view('admin/system_config/config');
            }
        }else{
            redirect('admin/login');
        }
    }

    public function edit_config(){

        if($this->session->userdata('logged_in')){

            // validatation for required fields
            //$this->form_validation->set_rules('page_title','Page Title','required');
            //$this->form_validation->set_rules('url_key','URL Key','callback_url_key_check');
            //$this->form_validation->set_rules('page_status','Status','required');
            //$this->form_validation->set_rules('page_content','Page Content','required');

            //if ($this->form_validation->run() == true){
            if (true){

                //if($this->input->post('flag')==1){
                //$this->input->post('favicon')
                $file_types_arr = array('favicon','logo_src');
                for($i=0; $i <= count($file_types_arr); $i++) {
                    $_path = $this->upload_image($file_types_arr[$i]);


                    //=UPLOAD_PORTFOLIO_PATH.$_path;
                    //$new_name= $this->resize_image($file_path);
                    //unlink($file_path);

                    if ($_path) {
                        $data[$file_types_arr[$i]] = $_path;
                    } else {
                        //$data['error']= $this->upload->display_errors();
                        //$this->load->view('admin/system_config/config', $data);

                    }
                }

                //}

                $data['default_title']   = $this->input->post('default_title');
                $data['default_description']   = $this->input->post('default_description');
                $data['default_keywords']   = $this->input->post('default_keywords');
                $data['miscellaneous_scripts']   = $this->input->post('miscellaneous_scripts');
                $data['logo_alt']   = $this->input->post('logo_alt');
                $data['welcome_txt']   = $this->input->post('welcome_txt');
                $data['copyright_txt']   = $this->input->post('copyright_txt');
                $data['miscellaneous_html']   = $this->input->post('miscellaneous_html');
                $data['from_email']   = $this->input->post('from_email');
                $data['from_name']   = $this->input->post('from_name');
                $data['smtp_host']   = $this->input->post('smtp_host');
                $data['smtp_port']   = $this->input->post('smtp_port');
                $data['encryption']   = $this->input->post('encryption');
                $data['smtp_username']   = $this->input->post('smtp_username');
                $data['smtp_password']   = $this->input->post('smtp_password');

                $data_updated = $this->System_config_model->update_config_row($data);

                if($data_updated)
                {
                    $this->session->set_flashdata('success', 'System configurations updated successfuly');

                    redirect('admin/system_config');

                }
                else
                {
                    $data['error']="Database error in updating system config image page";
                    $this->load->view('admin/system_config/edit_config', $data);
                }

            }else{

                //$this->session->set_flashdata('error', 'Database Error');
                $this->load->view('admin/system_config/');
            }

        } else {
            redirect('admin/login');
        }

    }

    function upload_image($file_upload_name)
    {
        $upload_path = "uploads/system_configs";

        if (!file_exists($upload_path))
        {
            $mask = umask(0);
            mkdir($upload_path, 0777, true);
            umask($mask);
        }

        $config['upload_path'] = "uploads/system_configs";
        $config['allowed_types'] = 'jpg|png|jpeg|svg';
        $config['max_size'] = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $name = date('Y-m-d:h:m:s');
        $config['file_name'] = "img-".$name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        //echo $file_upload_name;die;
        if (!$this->upload->do_upload($file_upload_name)){

            return false;
        }
        else{
            $upload_data = array('upload_data' => $this->upload->data()); // get data

            $upload_file = $upload_data['upload_data']['full_path']; // get file path
            chmod($upload_file,0777);
            $upload_data1 = $this->upload->data();
            $file_name = $upload_data1['file_name']; // get file name

            return  $file_name;
        }

    }

}