<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        // Digunakan ketika migrasi
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['selesai', 'sedang berjalan', 'batal'],
                'default'    => 'sedang berjalan'
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel
        $this->forge->createTable('todo_list', TRUE);
    }

    public function down()
    {
        // Digunakan ketika rollback
        // Menghapus tabel todo_list
        $this->forge->dropTable('todo_list');
    }
}
