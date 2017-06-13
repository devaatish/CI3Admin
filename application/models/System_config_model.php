<?php

class System_config_model extends CI_Model
{
    /**
     * This Function inserts record to table
     * @param  array $data
     * @return boolean
     *
     */
    function save_config_row($data)
    {
        $insert_data = $this->db->insert('system_configs', $data);
        if ($insert_data) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Load config records
     *
     * @return string
     *
     */
    function get_config_records()
    {

        $this->db->select('*');
        $this->db->from('system_configs');
        $query = $this->db->get();

        return $query->result();
    }


    /**
     * Update config records
     *
     * @return string $data
     *
     */
    public function update_config_row($data){
        $this->db->where('id', 1);
        $data_updated = $this->db->update('system_configs', $data);
        if ($data_updated) {
            return true;
        } else {
            return false;
        }

    }
}