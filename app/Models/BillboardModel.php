<?php

namespace App\Models;

use CodeIgniter\Model;

class BillboardModel extends Model
{
    protected $table            = 'billboard';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'judul',
        'area',
        'lokasi',
        'jenis',
        'lebar',
        'panjang',
        'unit',
        'lampu_tipe',
        'lampu_jumlah',
        'lampu_watt',
        'listrik_daya',
        'listrik_kontrak',
        'listrik_keterangan',
        'latitude',
        'longitude',
        'sewa',
        'aktif',
        'keterangan',
        'foto',
        'admin_buat',
        'admin_ubah'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'dibuat';
    protected $updatedField  = 'dirubah';
    protected $deletedField  = false;

    // Validation
    protected $validationRules      = [
        'judul'              => ['label' => 'Judul Billboard', 'rules' => 'required|string|max_length[100]'],
        'area'               => ['label' => 'Area Billboard', 'rules' => 'required|string|max_length[50]'],
        'lokasi'             => ['label' => 'Lokasi Billboard', 'rules' => 'required|string|max_length[255]'],
        'jenis'              => ['label' => 'Jenis Billboard', 'rules' => 'required|string|max_length[30]'],

        'lebar'              => ['label' => 'Lebar', 'rules' => 'required|integer|min_length[1]|max_length[1]'],
        'panjang'            => ['label' => 'Panjang', 'rules' => 'required|integer|min_length[1]|max_length[1]'],
        'unit'               => ['label' => 'Jumlah Unit', 'rules' => 'required|integer|min_length[1]|max_length[2]'],

        'lampu_tipe'         => ['label' => 'Tipe Lampu', 'rules' => 'permit_empty|integer|min_length[1]|max_length[1]'],
        'lampu_jumlah'       => ['label' => 'Jumlah Lampu', 'rules' => 'permit_empty|integer|min_length[1]|max_length[1]'],
        'lampu_watt'         => ['label' => 'Lampu Watt', 'rules' => 'permit_empty|integer|min_length[1]|max_length[4]'],
        'listrik_daya'       => ['label' => 'Daya Listrik', 'rules' => 'permit_empty|integer|min_length[1]|max_length[4]'],
        'listrik_kontrak'    => ['label' => 'Status Kontrak Listrik', 'rules' => 'permit_empty|integer|min_length[1]|max_length[1]'],
        'listrik_keterangan' => ['label' => 'Keterangan Listrik', 'rules' => 'permit_empty|string|max_length[255]'],

        'latitude'           => ['label' => 'Latitude', 'rules' => 'required|decimal'],
        'longitude'          => ['label' => 'Longitude', 'rules' => 'required|decimal'],
        'sewa'               => ['label' => 'Status Sewa', 'rules' => 'permit_empty|integer|min_length[1]|max_length[1]'],
        'aktif'              => ['label' => 'Status Aktif', 'rules' => 'permit_empty|integer|min_length[1]|max_length[1]'],

        'keterangan'         => ['label' => 'Keterangan', 'rules' => 'permit_empty|string|max_length[255]'],
        'foto'               => ['label' => 'Foto', 'rules' => 'permit_empty|string|max_length[255]'],
        'admin_buat'         => ['label' => 'Admin Pembuat', 'rules' => 'required|string|max_length[30]'],
        'admin_ubah'         => ['label' => 'Admin Pengubah', 'rules' => 'required|string|max_length[30]']
    ];

    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    /**
	 * Query dasar untuk server side tabel data billboard.
	 * @var \CodeIgniter\Database\BaseConnection $db
	 */
	public function tabel()
	{
		return $this->db->table('billboard')->select('*');
	}
}
