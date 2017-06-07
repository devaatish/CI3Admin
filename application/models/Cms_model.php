<?php

class Cms_model extends CI_Model
{
    /**
     * This Function inserts cms to table
     * @param $data
     * @return boolean
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

    /**
     * This Function loads first ten records from cms to table
     *
     * @return string
     * */
    function get_cms_records() {

        $this->db->select('c.cms_id, c.page_title,c.url_key,c.page_status,c.created_at,c.updated_at');
        $this->db->from('cms c');
        $this->db->order_by("c.page_title", "asc");
        $query = $this->db->get();

        return $query->result();
    }

}