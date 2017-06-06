<?php

class Login_model extends CI_Model {

    /**
     * This Function inserts data to table
     * @param $data
     * @return none
     * */
    function saveData($data) {
       $this->db->insert('users', $data);
    }


    /**
     * This Function check user is already present in users table or not
     * @param $data
     * @return string
     * */
    function check_user_details($data){
      
      
        $res = $this->db->get_where('users', array('username' => $data['username'],'password'=>$data['password']))->row();
      
        if(!empty($res))
        {
            return $res;
        }
        else{
            return false;
        } 
    }



    /**
     * To check the email address present in user table or not
     *
     * @param       string  $email    Input string
     * @return      boolean
     */

     function checkForEmail($email) {
            
        $this->db->select('*');
        
        $res =  $this->db->get_where('users', array('email'=>$email));
        if($res->num_rows()>= 1)
        {
            return true;
        }
        else
        {       
            return false;
        }   
    }
      

    /**
     * This function updates admin_user table for password
     * @param $data,$id
     * @return none
     *
     */
    function update_password($data, $id) {
        $this->db->where('id', $id);
        $res=$this->db->update('users', $data);
        if($res)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * This function is used to create random 8 digit password, that will get send to user also get updated into database
     *
     * @param string  $email Input string
     * @return if success return string or false
     */
    function forgotPassword($email) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $newpass = '';
        for ($i = 0; $i < 8; $i++) {
            $newpass .= $characters[rand(0, $charactersLength - 1)];
        }

        $data = array(
            'password' => md5($newpass)
        );
        $this->db->update('users', $data, array('email' => $email));
        if ($this->db->affected_rows() > 0) {
            return $newpass;
        } else {
            return false;
        }
    }



}

?>