<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Panel extends BaseConfig
{

    /**
	 * --------------------------------------------------------------------
	 * Layout for the views to extend
	 * --------------------------------------------------------------------
	 *
	 * @var string
	 */
	public $viewLayout = [
        'main'      => 'App\Views\Panel\Layout\main'
    ];
}