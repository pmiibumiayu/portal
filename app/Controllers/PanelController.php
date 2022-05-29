<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Config\Panel as PanelConfig;

class PanelController extends BaseController
{
    /**
	 * @var PanelConfig
	 */
	protected $config;

    /**
	 * @array Data View
	 */
	protected $viewData;

    public function __construct()
	{
		$this->config = config('Panel');
		$this->data['config'] = $this->config;
	}
    public function index()
    {
        return view('Panel\dashboard', $this->data);
    }
}