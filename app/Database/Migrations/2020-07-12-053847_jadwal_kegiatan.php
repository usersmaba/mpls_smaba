<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalKegiatan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jadwal'  => ['type' => 'int', 'constraint' => 5,],
			'jam_absen_h1'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_absen_h1_end'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_respon_h1'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_respon_h1_end'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_absen_h2'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_absen_h2_end'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_respon_h2'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_respon_h2_end'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_absen_h3'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_absen_h3_end'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_respon_h3'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_respon_h3_end'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_pesan_kesan'  => ['type' => 'varchar', 'constraint' => 70,],
			'jam_pesan_kesan_end'  => ['type' => 'varchar', 'constraint' => 70,],

		]);
		$this->forge->addKey('id_jadwal', TRUE);
		$this->forge->createTable('jadwal_kegiatan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('jadwal_kegiatan');
	}
}
