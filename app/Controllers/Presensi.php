<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Presensi extends BaseController
{
    public function index()
    {
        return view('presensi');
    }
}
