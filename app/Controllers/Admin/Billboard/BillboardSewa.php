<?php

namespace App\Controllers\Admin\Billboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BillboardSewa extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Sewa Billboard',
            'navigasi'  => '<a href="/admin/billboard">Billboard</a> &nbsp;',
        ];
        return view('admin/billboard/billboard_sewa', $data);
    }
}
