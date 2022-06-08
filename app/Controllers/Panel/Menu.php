<?php

namespace App\Controllers\Panel;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Config\Panel as PanelConfig;
use App\Libraries\Panel\Menu as MenuLib;
use App\Libraries\Panel\Form\Bootstrap5 as Form;

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

    protected $mainValidationRules = [
        'order'         => 'required',
        'icon'          => 'required',
        'label'         => 'required',
        'title'         => 'required',
        'description'   => 'required',
        'activator'     => 'required',
        'route'         => 'required',
        'type'          => 'required',
    ];

    public function __construct()
    {
        $this->menuset = new MenuLib();
    }

    public function getEncMenu()
    {
        // Generic response method
        return $this->respond($this->menuset->getEncoded(), 200);
    }

    public function addmain()
    {
        if (!$this->validate($this->mainValidationRules)) {
            return $this->fail($this->validator->getErrors(), 400);
        }

        return 'Success';
    }

    public function formmain()
    {
        $option = [
            'form'      => [
                'method'    => 'POST',
                'id'        => 'menuform',
            ],
            'url'       => '#!',
            'type'      => 'normal',
        ];
        $data = [
            [
                'type'  => 'group',
                'field' => [
                    [
                        'col'   => '',
                        'type'  => 'number',
                        'label' => 'Order',
                        'attr'  => [
                            'name'  => 'order',
                            'required' => true,
                        ],
                    ],
                    [
                        'col'   => '',
                        'type'  => 'text',
                        'label' => 'icon',
                        'attr'  => [
                            'name'  => 'Icon',
                            'required' => true,
                        ],
                    ],
                ],
            ],
            [
                'type'  => 'text',
                'attr' => [
                    'name'  => 'label',
                    'required' => true,
                ],
                'label' => 'Label',
            ],
            [
                'type'  => 'text',
                'attr' => [
                    'name'  => 'judul',
                    'required' => true,
                ],
                'label' => 'Judul',
            ],
            [
                'type'  => 'textarea',
                'attr' => [
                    'name'  => 'description',
                    'required' => true,
                ],
                'label' => 'Deskripsi',
            ],
            [
                'type'  => 'text',
                'attr' => [
                    'name'  => 'activator',
                    'required' => true,
                ],
                'label' => 'Aktivator',
            ],
            [
                'type'  => 'text',
                'attr' => [
                    'name'  => 'route',
                    'required' => true,
                ],
                'label' => 'Route',
            ],
            [
                'type'      => 'select',
                'options'   => [
                    'single'        => 'Single',
                    'multiple'      => 'Multiple',
                ],
                'attr'      => [
                    'name'  => 'type',
                    'required' => true,
                ],
                'label'     => 'Type Menu',
            ],
        ];
        $form = new Form($data, $option);

        return $this->respond($form->getForm(), 200);
    }
}