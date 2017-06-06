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
    public function email_check($pass)
    {
        $this->db->where('password',$pass);
        $query=$this->db->get('users')->num_rows();
        if($query > 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


    /*
    *@desc : check for unique user name
    @param : $username
    */
    
     function checkForUserName($username) {

        $this->db->select('*');
        $res =  $this->db->get_where('users', array('username'=>$username));
                
            if($res->num_rows()>= 1)
            {
                return 1;
            }
            else
            {       
                return 0;
            }   
    }

     function checkForEmail($email) {
            
        $this->db->select('*');
        
        $res =  $this->db->get_where('users', array('email'=>$email));
        if($res->num_rows()>= 1)
        {
            return 1;
        }
        else
        {       
            return 0;
        }   
    }
      

     function check_oldpassword($password,$id) { 
         $this->db->select('*');
        
        $res =  $this->db->get_where('users', array('password'=>$password,'id'=>$id));
        if($res->num_rows()==1)
        {
            return TRUE;
        }
        else
        {       
            return FALSE;
        }  
     }

    /**
     * This function updates admin_user table for password
     * @param $data,$id
     * @return none
     * */
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



}

?>