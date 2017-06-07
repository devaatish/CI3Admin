<?php
/**
 * Created by Rupesh Gardi.
 * User: webwerks
 * Date: 7/6/17
 * Time: 8:03 PM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Cms extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'cms_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'page_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'url_key' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'page_status' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'content_heading' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'page_content' => array(
                'type' => 'VARCHAR',
                'constraint' => '512',
            ),
            'meta_keywords' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'meta_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'created_by' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'updated_by' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'created_at' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'updated_at' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            )
        ));
        $this->dbforge->add_key('cms_id', TRUE);
        $this->dbforge->create_table('cms');
    }

    public function down()
    {
        $this->dbforge->drop_table('cms');
    }
}