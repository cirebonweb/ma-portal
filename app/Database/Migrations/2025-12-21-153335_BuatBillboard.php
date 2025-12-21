<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatBillboard extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'judul'              => ['type' => 'varchar', 'constraint' => 100], // Baliho A. Yani
            'area'               => ['type' => 'varchar', 'constraint' => 50],  // Kota Cirebon
            'lokasi'             => ['type' => 'varchar', 'constraint' => 255], // Jl. Ahmad Yani By Pass - Kota Cirebon
            'jenis'              => ['type' => 'varchar', 'constraint' => 30],  // Baliho Frontlight, Baliho Backlight, Neon Box
            'lebar'              => ['type' => 'tinyint', 'constraint' => 1],
            'panjang'            => ['type' => 'tinyint', 'constraint' => 1],
            'unit'               => ['type' => 'tinyint', 'constraint' => 2],   // banyaknya billboard pada satu lokasi yang sama
            'lampu_tipe'         => ['type' => 'tinyint', 'constraint' => 1, 'default' => 0], // 0 Lampu Sorot, 1 LED Modul
            'lampu_jumlah'       => ['type' => 'tinyint', 'constraint' => 1, 'default' => 0],
            'lampu_watt'         => ['type' => 'tinyint', 'constraint' => 4, 'default' => 0],
            'listrik_daya'       => ['type' => 'tinyint', 'constraint' => 4, 'default' => 0],
            'listrik_kontrak'    => ['type' => 'tinyint', 'constraint' => 1, 'default' => 0], // 0 = milik sendiri, 1 = sewa dari pihak lain
            'listrik_keterangan' => ['type' => 'varchar', 'constraint' => 255, 'null' => true], // misalnya: "Daya listrik sewa dari rumah Pak Didi", "Meteran milik pemilik lahan"
            'latitude'           => ['type' => 'double'],
            'longitude'          => ['type' => 'double'],
            'sewa'               => ['type' => 'tinyint', 'constraint' => 1, 'default' => 1], // 0 = Tersewa, 1 = Tersedia
            'aktif'              => ['type' => 'tinyint', 'constraint' => 1, 'default' => 1], // 0 = Nonaktif (tidak bisa disewa), 1 = Aktif (bisa disewa)
            'keterangan'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'foto'               => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'admin_buat'         => ['type' => 'varchar', 'constraint' => 30],
            'admin_ubah'         => ['type' => 'varchar', 'constraint' => 30],
            'dibuat'             => ['type' => 'datetime'],
            'dirubah'            => ['type' => 'datetime']
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('billboard');
    }

    public function down()
    {
        $this->forge->dropTable('billboard');
    }
}
