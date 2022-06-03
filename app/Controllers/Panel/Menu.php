<?php

namespace App\Controllers\Panel;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Config\Panel as PanelConfig;
use App\Libraries\Panel\Menu as MenuLib;

class Menu extends BaseController
{
    use ResponseTrait;

    /**
     * @var PanelConfig
     */
    protected $config;

    /**
     * @array Set of menu
     */
    protected $menuset;

    public function __construct()
    {
        $this->menuset = new MenuLib();
    }

    public function getEncMenu()
    {
        // Generic response method
        return $this->respond($this->menuset->getEncoded(), 200);
    }
}