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
        'main'      	=> 'App\Views\Panel\Layout\Bootstrap5\\',
        'bootstrap5'    => 'App\Views\Panel\Layout\Bootstrap5\\',
    ];
}