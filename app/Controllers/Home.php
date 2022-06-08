<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('Home\home');
    }

    public function show404()
    {
        if ($this->request->isAJAX()) {
            return $this->failNotFound('Resource yang anda cari tidak ditemukan !');
        } else {
            echo view('errors/404');
        }
    }
}