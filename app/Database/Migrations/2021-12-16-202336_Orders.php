<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'invoice' => [
                'type' => 'VARCHAR',
                'constraint' => 20,

            ],
            'custname' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'problem' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'datereceived' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'datedone' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('invoice', true);
        $this->forge->createTable('orders');
    }



    public function down()
    {
        //
        $this->forge->dropTable('orders');
    }
}
