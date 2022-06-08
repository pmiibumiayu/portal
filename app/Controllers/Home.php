<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Libraries\Panel\Form\Bootstrap5 as Form;

class Home extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('Home/home');
    }

    public function show404()
    {
        if ($this->request->isAJAX()) {
            return $this->failNotFound('Resource yang anda cari tidak ditemukan !');
        } else {
            echo view('errors/404');
        }
    }

    public function test()
    {
        $option = [
            'form'      => [
                'method'    => 'POST',
            ],
            'url'       => 'coba',
            'type'      => 'normal',
        ];
        $data = [
            [
                'field' => [
                    'type'  => 'text',
                    'name'  => 'nama',
                ],
                'label' => 'Nama Lengkap',
            ],
            [
                'field' => [
                    'type'  => 'text',
                    'name'  => 'nomor',
                ],
                'label' => 'Nomor HP',
            ],
        ];
        $form = new Form($data, $option);
        return $form->getForm();
    }
}