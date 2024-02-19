<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblimage extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 30,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'uid' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tblimage');
    }

    public function down()
    {
        $this->forge->dropTable('tblimage');
    }
}
