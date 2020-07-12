<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAdmin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_admin'  => ['type' => 'int', 'constraint' => 5,],
			'username'  => ['type' => 'varchar', 'constraint' => 70,],
			'password'  => ['type' => 'varchar', 'constraint' => 70,],

		]);
		$this->forge->addKey('id_admin', TRUE);
		$this->forge->createTable('user_admin');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user_admin');
	}
}
