<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todolist extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'           => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'kegiatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'waktu' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data');
    }

    public function down()
    {
        $this->forge->dropTable('data');
    }
}
