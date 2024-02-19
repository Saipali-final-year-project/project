<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblsell extends Migration
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
            'categories' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'region' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'ctype' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'district' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'brand' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'description' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       =>  true,
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => '250',
            ],
            'qty' => [
                'type'       => 'INT',
                'constraint' => '250',
            ],
            'delivery' => [
                'type'       => 'INT',
                'constraint' => '250',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'status' => [
                'type'       => 'INT',
                'constraint' => '250',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tblsell');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tblsell');
    }
}
