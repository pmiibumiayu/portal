<?php

namespace App\Libraries\Panel;

use Myth\Auth\FlatAuthorization;
use App\Models\MenuModel;

class Menu
{
    /**
     * @var MenuModel
     */
    protected $menumodel;

    /**
     * @var FlatAuthorization
     */
    protected $myth;

    /**
     * @array Dataset from menu's model
     */
    protected $dataset;


    /**
     * @array Menu After Encoded into single array
     */
    protected $encoded = [];

    public function __construct(array $dataset = null, bool $encoded = true)
    {
        $this->menumodel        = model('App\Models\MenuModel');
        if ($dataset) {
            $this->dataset  = $dataset;
        } else {
            $this->dataset  = $this->menumodel->findAll();
        }
        $this->myth             = service('authorization');
        if ($encoded) {
            $this->encode();
        }
    }

    public function encode()
    {
        $this->encoded = [];
        $data   = $this->dataset;
        foreach ($data as $ds) {
            if (isset($ds->menu) && !empty($ds->menu)) {
                foreach ($ds->menu as $dsmenu) {
                    array_push($this->encoded, $dsmenu);
                }
            }
        }
        $this->encoded  = array_map("unserialize", array_unique(array_map("serialize", $this->encoded)));
        foreach ($this->encoded as $enckey => $encval) {
            foreach ($data as $ds) {
                if (isset($ds->menu) && !empty($ds->menu)) {
                    foreach ($ds->menu as $dsmenu) {
                        if ($encval['activator'] == $dsmenu['activator']) {
                            $this->encoded[$enckey]['group'][]    = $this->myth->group($ds->group_id)->name;
                        }
                    }
                }
            }
        }
        return $this->encoded;
    }

    public function getEncoded()
    {
        return $this->encoded;
    }

    public function test(int $id)
    {
        // Testing
        $data    = $this->menumodel->find($id);
        $menu    = $data->menu;

        $menu    = [
            [
                'order'         => '1',
                'icon'          => 'list',
                'label'         => 'Manajemen Menu',
                'title'         => 'Manajemen Menu',
                'description'   => 'Manajemen Menu berdasarkan group id',
                'activator'     => 'menu',
                'route'         => 'super-menu',
                'type'          => 'single',
                'sub'           => [],
            ],
            [
                'order'         => '2',
                'icon'          => 'list',
                'label'         => 'Preferensi',
                'title'         => '',
                'description'   => 'Ubah setelan web',
                'activator'     => 'preferensi',
                'route'         => 'preferensi',
                'type'          => 'multiple',
                'sub'           => [
                    [
                        'order'         => '1',
                        'label'         => 'Profile',
                        'title'         => 'Profile',
                        'description'   => 'Ubah Aturan Pengguna',
                        'activator'     => 'profile',
                        'route'         => 'preferensi-profile',
                    ],
                    [
                        'order'         => '2',
                        'label'         => 'Kontak',
                        'title'         => 'Kontak',
                        'description'   => 'Kontak yang dapat dihubungi oleh publik',
                        'activator'     => 'contact',
                        'route'         => 'preferensi-contact',
                    ],
                ]
            ],
        ];

        $data->menu = $menu;
        $this->menumodel->save($data);

        dd(json_encode($data->menu));
    }
}