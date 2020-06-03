<?php

namespace App\Database\Migrations;

use \CodeIgniter\Database\Migration;

class AddLanguages extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'code' => [
                'type' => 'VARCHAR',
                'comment' => 'ISO 639-1 language code.',
                'constraint' => 2,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'comment' => 'English language name.',
                'constraint' => 191,
            ],
            'native_name' => [
                'type' => 'VARCHAR',
                'comment' => 'Native language name.',
                'constraint' => 191,
            ],
        ]);
        $this->forge->addKey('code', true);
        $this->forge->createTable('languages');
    }

    public function down()
    {
        $this->forge->dropTable('languages');
    }
}