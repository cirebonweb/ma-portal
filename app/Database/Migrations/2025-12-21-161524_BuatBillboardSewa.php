<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatBillboardSewa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'billboard_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'user_id'      => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'periode'      => ['type' => 'tinyint', 'constraint' => 2], // masa sewa billboard dalam hitungan bulan
            'tgl_awal'     => ['type' => 'date'], // tanggal awal sewa billboard
            'tgl_akhir'    => ['type' => 'date'], // tanggal akhir sewa billboard
            'status'       => ['type' => 'tinyint', 'constraint' => 1, 'default' => 1], // 0 = Aktif, 1 = Selesai
            'admin_buat'   => ['type' => 'varchar', 'constraint' => 30],
            'admin_ubah'   => ['type' => 'varchar', 'constraint' => 30],
            'dibuat'       => ['type' => 'datetime'],
            'dirubah'      => ['type' => 'datetime']
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('billboard_id', 'billboard', 'id', 'NO ACTION', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'NO ACTION', 'CASCADE');
        $this->forge->createTable('billboard_sewa');
    }

    public function down()
    {
        $this->forge->dropTable('billboard_sewa');
    }
}
