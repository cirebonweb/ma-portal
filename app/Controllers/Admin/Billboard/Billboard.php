<?php

namespace App\Controllers\Admin\Billboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Billboard\BillboardModel;
use Cirebonweb\Libraries\TabelLibrari;

class Billboard extends BaseController
{
    protected $billboardModel;

    public function __construct()
    {
        $this->billboardModel = new BillboardModel();
    }

    public function index()
    {
        $data = [
            'pageTitle' => 'Data Billboard',
            'navTitle' => 'Billboard',
            'navigasi'  => '',
        ];
        return view('admin/billboard/billboard_data', $data);
    }

    public function add()
    {
        $data = [
            'pageTitle' => 'Add Billboard',
            'navTitle' => 'Add',
            'navigasi'  => '<a href="/admin/billboard">Billboard</a> &nbsp;',
        ];
        return view('admin/billboard/billboard_input', $data);
    }

    public function tabel()
    {
        $builder = $this->billboardModel->tabel();

        $dataTable = new TabelLibrari($builder, $this->request);
        $dataTable->setSearchable(['judul', 'area', 'lokasi']);
        // $dataTable->setDefaultOrder(['id' => 'desc']);

        $dataTable->setRowCallback(function ($row) {
            return [
                $row->id,
                $row->judul,
                $row->area,
                $row->lokasi,
                $row->jenis,
                $row->lebar . ' X ' . $row->panjang . ' M',
            ];
        });

        return $this->response->setJSON($dataTable->getResult());
    }
}
