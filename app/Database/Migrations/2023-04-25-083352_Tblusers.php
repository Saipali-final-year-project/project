<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblusers extends Migration {
    public function up() {
        $this->forge->addField( [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 30,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'firstname' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'lastname' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'mobile' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       =>  true,
            ],

            'created_at datetime default current_timestamp',
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'default'       =>  'inactive',
            ],
            'uniid' => [
                'type'       => 'VARCHAR',
                'constraint' => '32',
            ],
            'activation_date datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'delete_at datetime not null  '
        ] );
        $this->forge->addKey( 'id', true );
        $this->forge->addUniqueKey( 'email' );
        $this->forge->createTable( 'tblusers' );
    }

    public function down() {
        $this->forge->dropTable( 'tblusers' );
    }
}
