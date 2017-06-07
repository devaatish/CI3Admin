<?php

class Cms_model extends CI_Model
{
    /**
     * This Function inserts data to table
     * @param $data
     * @return none
     * */
    function save_cms_data($data) {
        $insert_data = $this->db->insert('cms', $data);
        if($insert_data){
            return true;
        }else{
            return false;
        }
        //$this->db->set('created_at', 'NOW()', FALSE);
    }

}