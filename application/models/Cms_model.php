<?php

class Cms_model extends CI_Model
{
    /**
     * This Function inserts record to table
     * @param  array $data
     * @return boolean
     *
     */
    function save_cms_data($data) {
        $insert_data = $this->db->insert('cms', $data);
        if($insert_data){
            return true;
        }else{
            return false;
        }
    }

    /**
     * This Function loads all records from cms table
     *
     * @return string
     *
     */
    function get_cms_records() {

        $this->db->select('c.cms_id, c.page_title,c.url_key,c.page_status,c.created_at,c.updated_at');
        $this->db->from('cms c');
        $this->db->order_by("c.page_title", "asc");
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * This function return single row form cms table
     * @param int $id
     * @return $query->result()
     *
     */
    function get_cms_row_by_id($id) {

        $this->db->select('c.cms_id,c.page_title,c.url_key,c.page_status,c.page_content,c.content_heading,c.meta_keywords,c.meta_desc');
        $this->db->from('cms c');
        $this->db->where('c.cms_id =', $id);
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * This function updates single row in cms table
     * @param array $data, int $id
     * @return boolean
     *
     */
    function update_cms_row_by_id($data, $id) {
        $this->db->where('cms_id', $id);
        return $this->db->update('cms', $data);


    }

    /**
     * To check unique url key
     * @param int $url_key
     * @return boolean
     *
     */
    function check_url_key($url_key) {

        $this->db->select('c.cms_id');
        $res =  $this->db->get_where('cms c', array('url_key'=>$url_key));

        if($res->num_rows()>= 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    /**
     * To check unique url key
     * @param int $url_key
     * @return boolean
     *
     */
    function check_url_key_in_edit($url_key, $id) {

        $this->db->select('c.cms_id');
        $res =  $this->db->get_where('cms c', array('url_key'=>$url_key, 'cms_id !=' => $id));

        if($res->num_rows()>= 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

}