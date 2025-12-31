<?php

namespace App\Controllers\Admin\Billboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Billboard extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Billboard',
            'navigasi'  => '',
        ];
        return view('admin/billboard/billboard', $data);
    }
}
