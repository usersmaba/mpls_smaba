<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPeserta extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_peserta'  => ['type' => 'int', 'constraint' => 5,],
			'nomor_pendaftaran'  => ['type' => 'varchar', 'constraint' => 70,],
			'username'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama'  => ['type' => 'varchar', 'constraint' => 70,],
			'tempat_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'tanggal_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'no_telpon'  => ['type' => 'varchar', 'constraint' => 70,],
			'merek_hp'  => ['type' => 'varchar', 'constraint' => 70,],
			'bisa_online'  => ['type' => 'varchar', 'constraint' => 70,],
			'alasan_tidak_bisa_online'  => ['type' => 'varchar', 'constraint' => 255,],
			'jurusan_pilihan'  => ['type' => 'varchar', 'constraint' => 70,],
			'nilai _skhu'  => ['type' => 'varchar', 'constraint' => 70,],
			'absen_h1'  => ['type' => 'varchar', 'constraint' => 70,],
			'respon_h1'  => ['type' => 'longtext',],
			'absen_h2'  => ['type' => 'varchar', 'constraint' => 70,],
			'respon_h2'  => ['type' => 'longtext',],
			'absen_h3'  => ['type' => 'varchar', 'constraint' => 70,],
			'respon_h3'  => ['type' => 'longtext',],
			'pesan_kesan'  => ['type' => 'longtext',],
			'link_tugas'  => ['type' => 'varchar', 'constraint' => 70,],
			'password'  => ['type' => 'varchar', 'constraint' => 255,],
			'is_active'  => ['type' => 'int', 'constraint' => 5,],
			'last_login'  => ['type' => 'varchar', 'constraint' => 70,],
			'updated_at' => [
				'type'           => 'datetime',
			],
			'deleted_at' => [
				'type'           => 'datetime',
			],
		]);
		$this->forge->addKey('id_peserta', TRUE);
		$this->forge->createTable('data_peserta');
	}

	public function down()
	{
		$this->forge->dropTable('data_peserta');
	}
}
