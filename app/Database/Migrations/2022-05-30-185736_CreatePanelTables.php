<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePanelTables extends Migration
{
    public function up()
    {
        /*
         * Menu
         */

        $this->forge->addField([
            'group_id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'menu'             => ['type' => 'json', 'null' => true],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('group_id', true);
        $this->forge->addForeignKey('group_id', 'auth_groups', 'id', '', 'CASCADE');
        $this->forge->createTable('panel_menu', true);
    }

    public function down()
    {
        $this->forge->dropTable('panel_menu', true);
    }
}