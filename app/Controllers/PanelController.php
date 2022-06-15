<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Panel\Menu as MenuController;
use App\Config\Panel as PanelConfig;
use App\Libraries\Panel\Menu as MenuLibrary;

class PanelController extends BaseController
{
    /**
     * @var PanelConfig
     */
    protected $config;

    /**
     * @array Menu Set
     */
    protected $menuset;

    /**
     * @service Auth Service
     */
    protected $auth;

    /**
     * @array Data View
     */
    protected $viewData;

    public function __construct()
    {
        $this->config           = config('Panel');
        $this->menuset          = new MenuLibrary();
        $this->data['menu']     = $this->menuset;
        $this->data['config']   = $this->config;
        $this->auth = service('authorization');
    }

    public function index()
    {
        return view('Panel/dashboard', $this->data);
    }

    public function menu()
    {
        // $this->menuset->test(2);
        // dd($this->menuset->decode());
        $this->data['encmenu']     = $this->menuset->encode();
        return view('Panel/Super/menu', $this->data);
    }
}