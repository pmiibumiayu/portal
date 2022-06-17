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
     * @service Auth Service
     */
    protected $auth;

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
        'group'          => 'required',
    ];

    public function __construct()
    {
        $this->menuset = new MenuLib();
        $this->auth = service('authorization');
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
            // dd($this->validator->getErrors());
        }

        $data = $this->request->getPost();
        $data['sub'] = [];
        $data['group'] = explode(',', $data['group']);

        $save = $this->menuset->add($data);

        return $this->respondCreated($save);
    }

    public function editmain($id)
    {
        if (!$this->validate($this->mainValidationRules)) {
            return $this->fail($this->validator->getErrors(), 400);
            // dd($this->validator->getErrors());
        }

        $data = $this->request->getPost();
        $data['group'] = explode(',', $data['group']);
        return $this->respond($data, 200);

        $save = $this->menuset->add($data);

        return $this->respondCreated($save);
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
                        'label' => 'Icon',
                        'attr'  => [
                            'name'  => 'icon',
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
                    'name'  => 'title',
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
            [
                'type'      => 'select',
                'options'   => [],
                'attr'      => [
                    'name'  => 'group',
                    'multiple' => true,
                    'required' => true,
                ],
                'label'     => 'Group',
            ],
        ];
        foreach ($this->auth->groups() as $value) {
            $data[7]['options'][$value->name] = ucwords($value->name);
        }
        $form = new Form($data, $option);

        return $this->respond($form->getForm(), 200);
    }
}