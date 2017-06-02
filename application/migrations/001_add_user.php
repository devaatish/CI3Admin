<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_User extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'phone_no' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'address' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'created_at' => array(
                'type' => 'timestamp',
            ),
        ));
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}