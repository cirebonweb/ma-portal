<?php

namespace App\Controllers\Admin\Billboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BillboardLahan extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Lahan Billboard',
            'navigasi'  => '<a href="/admin/billboard">Billboard</a> &nbsp;',
        ];
        return view('admin/billboard/billboard_lahan', $data);
    }
}
