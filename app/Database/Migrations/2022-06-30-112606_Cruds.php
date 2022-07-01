<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cruds extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'fname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'age' => [
                'type' => 'INT',
                'null' => true,
            ],
            'depart' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cruds');
    }

    public function down()
    {
        $this->forge->dropTable('cruds');
    }
}
