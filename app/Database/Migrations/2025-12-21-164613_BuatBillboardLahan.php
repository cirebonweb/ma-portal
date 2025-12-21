<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatBillboardLahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'billboard_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'user_id'      => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'biaya_lahan'  => ['type' => 'decimal', 'constraint' => '12,2'], // biaya lahan dalam hitungan bulan
            'periode'      => ['type' => 'tinyint', 'constraint' => 2], // masa sewa lahan dalam hitungan bulan
            'tgl_bayar'    => ['type' => 'date'], // tanggal pembayaran sewa lahan
            'tgl_awal'     => ['type' => 'date'], // tanggal awal sewa lahan
            'tgl_akhir'    => ['type' => 'date'], // tanggal akhir sewa lahan
            'admin_buat'   => ['type' => 'varchar', 'constraint' => 30],
            'admin_ubah'   => ['type' => 'varchar', 'constraint' => 30],
            'dibuat'       => ['type' => 'datetime'],
            'dirubah'      => ['type' => 'datetime']
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('billboard_id', 'billboard', 'id', 'NO ACTION', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'NO ACTION', 'CASCADE');
        $this->forge->createTable('billboard_lahan');
    }

    public function down()
    {
        $this->forge->dropTable('billboard_lahan');
    }
}
