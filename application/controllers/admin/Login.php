<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

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
        $this->load->helper('form');
        $this->load->helper('captcha');
        $this->load->helper('string');
        $this->load->model('Login_model');

    }

    /**
     * If admin user is not logged in then this method will get called to load login form
     *
     * @return void
     */

    public function index(){

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required|callback_check_captcha');
        $userCaptcha = $this->input->post('userCaptcha');

        // Get the user's entered captcha value from the form
        $userCaptcha =$this->input->post('captcha');

        // Get the actual captcha value that we stored in the session
        $word = $this->session->userdata('captchaWord');

        if ($this->form_validation->run() == true){

            $data['username']   = $this->input->post('username');
            $data['password']   = md5($this->input->post('password'));


            $userExist = $this->Login_model->check_user_details($data);

            $sess_array = array();

            if($userExist)
            {
                // Clear the session variable
                $this->session->unset_userdata('captchaWord');
                $sess_array = array
                (
                    'username'  => $userExist->username,
                    'id'    => $userExist->id,
                );
                $this->session->set_userdata('logged_in', $sess_array);

                redirect('admin/dashboard');

            }
            else
            {
                // numeric random number for captcha
                $random_number = substr(number_format(time() * rand(),0,'',''),0,6);

                $vals = array(
                    'word'          => $random_number,
                    'img_path'      => 'uploads/captcha/',
                    'img_url'       => base_url().'uploads/captcha/',
                    'font_path'     => 'uploads/captcha/texb.ttf',
                    'img_width'     => '150',
                    'img_height'    => 30,
                    'expiration'    => 7200,
                    'word_length'   => 8,
                    'font_size'     => 16,
                    'img_id'        => 'Imageid',
                    'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

                    // White background and border, black text and red grid
                    'colors'        => array(
                        'background' => array(255, 255, 255),
                        'border' => array(255, 255, 255),
                        'text' => array(0, 0, 0),
                        'grid' => array(255, 40, 40)
                    )
                );

                // $captcha = create_captcha($vals);

                $data['captcha'] = create_captcha($vals);
                $data['error']="Please Enter Valid Username and Password..";
                $this->load->view('admin/login', $data);
            }

        }else{
            // numeric random number for captcha
            $random_number = substr(number_format(time() * rand(),0,'',''),0,6);

            $vals = array(
                'word'          => $random_number,
                'img_path'      => 'uploads/captcha/',
                'img_url'       => base_url().'uploads/captcha/',
                'font_path'     => 'uploads/captcha/texb.ttf',
                'img_width'     => '150',
                'img_height'    => 30,
                'expiration'    => 7200,
                'word_length'   => 8,
                'font_size'     => 16,
                'img_id'        => 'Imageid',
                'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

                // White background and border, black text and red grid
                'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 40, 40)
                )
            );
            $data['captcha'] = create_captcha($vals);

            $this->session->set_userdata('captchaWord',$data['captcha']['word']);
            $data['error']="Please Enter Valid Username and Password";
            //echo $this->session->flashdata('success');
            //print_r($data);die;
            //print_r($data['captcha']);die;
            $this->load->view('admin/login', $data);
        }

    }

    /**
     * Call back function to validate captcha
     *
     * @param       string  $str    Input string
     * @return      boolean
     */
    public function check_captcha($str){
        $word = $this->session->userdata('captchaWord');
        if(strcmp(strtoupper($str),strtoupper($word)) == 0){
            return true;
        }
        else{
            $this->form_validation->set_message('check_captcha', 'Please enter correct words!');
            return false;
        }
    }

    /**
     * This function is used to logout from admin panel
     */
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }

    /**
     * This function is used to reset password
     *
     */
    public function forgot_password()
    {

        $random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $vals = array(
            'word' => $random_number,
            'img_path' => 'uploads/captcha/',
            'img_url' => base_url() . 'uploads/captcha/',
            'font_path' => 'uploads/captcha/texb.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 8,
            'font_size' => 16,
            'img_id' => 'Imageid',
            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        $data['captcha'] = create_captcha($vals);
        $this->session->set_userdata('captchaWord', $data['captcha']['word']);
        $data['show_fp_form'] = true;

        $email = $this->input->post('email');

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login', $data);
        } else {
            $email = $this->input->post('email');

            //To check the email address present in user table or not
            $email_present = $this->Login_model->checkForEmail($email);
            if ($email_present) {

                //To create random 8 digit password string and update same in users table against email id
                $newpassword = $this->Login_model->forgotPassword($email);

                //Load email library and configuration
                $this->load->library('email');
                $config['protocol'] = 'sendmail';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;

                $this->email->initialize($config);

                $this->email->from('rupesh.gardi@wwindia.com', 'PHP Dev');
                $this->email->to($email);
                //$this->email->cc('another@another-example.com');
                //$this->email->bcc('them@their-example.com');

                $this->email->subject('Password Reset');
                $this->email->set_mailtype("html");
                $this->email->message('Hi, <br /><br />Your new password is ' . $newpassword . '. <br /><br />Best regards,<br />Neo Admin');
                $email_send = $this->email->send();
                if($email_send){
                    $this->session->set_flashdata('success', 'Your new password has been emailed to you');
                }else{
                    $this->session->set_flashdata('error', 'Error in sending reset password email');
                }
                redirect('admin/login');

            } else {
                $data['fp_error'] = "Email id not registered.";
                $this->load->view('admin/login', $data);

            }
        }
    }




}