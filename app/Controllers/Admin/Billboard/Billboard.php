<?php

namespace App\Controllers\Admin\Billboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Billboard extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Data Billboard',
            'navTitle' => 'Billboard',
            'navigasi'  => '',
        ];
        return view('admin/billboard/billboard', $data);
    }
}
