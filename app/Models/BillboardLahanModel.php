<?php

namespace App\Models;

use CodeIgniter\Model;

class BillboardLahanModel extends Model
{
    protected $table            = 'billboard_lahan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'billboard_id',
        'user_id',
        'biaya_lahan',
        'periode',
        'tgl_bayar',
        'tgl_awal',
        'tgl_akhir',
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
        'billboard_id' => ['label' => 'ID Billboard', 'rules' => 'required|integer'],
        'user_id'      => ['label' => 'ID User', 'rules' => 'required|integer'],
        'biaya_lahan'  => ['label' => 'Biaya Lahan', 'rules' => 'required|decimal'],
        'periode'      => ['label' => 'Periode Sewa (bulan)', 'rules' => 'required|integer|min_length[1]|max_length[2]'],
        'tgl_bayar'    => ['label' => 'Tanggal Bayar Sewa', 'rules' => 'required|valid_date'],
        'tgl_awal'     => ['label' => 'Tanggal Awal Sewa', 'rules' => 'required|valid_date'],
        'tgl_akhir'    => ['label' => 'Tanggal Akhir Sewa', 'rules' => 'required|valid_date'],
        'admin_buat'   => ['label' => 'Admin Pembuat', 'rules' => 'required|string|max_length[30]'],
        'admin_ubah'   => ['label' => 'Admin Pengubah', 'rules' => 'required|string|max_length[30]']
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
}
