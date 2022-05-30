<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Config\Panel as PanelConfig;
use App\Models\MenuModel;

class PanelController extends BaseController
{
    /**
     * @var PanelConfig
     */
    protected $config;

    /**
     * @var MenuModel
     */
    protected $menumodel;

    /**
     * @array Data View
     */
    protected $viewData;

    public function __construct()
    {
        $this->config           = config('Panel');
        $this->menumodel        = model('App\Models\MenuModel');
        $this->data['config']   = $this->config;
    }

    public function index()
    {
        return view('Panel\dashboard', $this->data);
    }

    public function menu()
    {
        // Testing
        // $data    = $this->menumodel->find(3);
        // $menu    = $data->menu;

        // $menu    = [
        //     [
        //         'order'         => '1',
        //         'icon'          => 'list',
        //         'label'         => 'Manajemen Menu',
        //         'title'         => 'Manajemen Menu',
        //         'description'   => 'Manajemen Menu berdasarkan group id',
        //         'activator'     => 'menu',
        //         'route'         => 'super-menu',
        //         'type'          => 'single',
        //         'sub'           => [],
        //     ],
        //     [
        //         'order'         => '2',
        //         'icon'          => 'list',
        //         'label'         => 'Preferensi',
        //         'title'         => '',
        //         'description'   => 'Ubah setelan web',
        //         'activator'     => 'preferensi',
        //         'route'         => 'preferensi',
        //         'type'          => 'multiple',
        //         'sub'           => [
        //             'order'         => '2',
        //             'label'         => 'Kontak',
        //             'title'         => 'Kontak',
        //             'description'   => 'Kontak yang dapat dihubungi oleh publik',
        //             'activator'     => 'contact',
        //             'route'         => 'preferensi-contact',
        //         ],
        //     ],
        // ];

        // $data->menu = $menu;
        // $this->menumodel->save($data);

        // dd($data);

        $this->data['menu']     = $this->menumodel->findAll();
        return view('Panel\Super\menu', $this->data);
    }
}