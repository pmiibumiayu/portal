<?php

namespace App\Libraries\Panel\Form;

class Bootstrap5
{
    /**
     * @array Form Set
     */
    protected $formset;

    /**
     * @array Form Result
     */
    protected $formres;

    /**
     * @array Form Options
     */
    protected $options;

    public function __construct(array $formset, array $options)
    {
        $this->formset = $formset;
        $this->options = $options;
        helper('form');
    }

    public function getForm()
    {
        $this->formres = $this->open();
        foreach ($this->formset as $form) {
            if ($form['type'] == 'group') {
                $this->formres .= $this->group($form);
            } else {
                $this->formres .= $this->create($form);
            }
        }
        $this->formres .= $this->close();
        return $this->formres;
    }

    public function create($form)
    {
        switch ($form['type']) {
            case 'text':
                return $this->input($form);
                break;
            case 'textarea':
                return $this->textarea($form);
                break;
            case 'select':
                return $this->select($form);
                break;
            case 'submit':
                return $this->submit($form);
                break;
            default:
                return $this->input($form);
                break;
        }
    }

    public function open()
    {
        return form_open($this->options['url'], $this->options['form']);
    }

    public function input($data)
    {
        $data['attr']['type'] = $data['type'];
        $data['attr']['class'] = 'form-control';
        $data['attr']['placeholder'] = 'content';
        return '<div class="form-floating mb-3">' . form_input($data['attr']) . '<label for="' . $data['attr']['name'] . '">' . $data['label'] . '</label>' . '</div>';
    }

    public function textarea($data)
    {
        $data['attr']['class'] = 'form-control';
        $data['attr']['placeholder'] = 'content';
        return '<div class="form-floating mb-3">' . form_textarea($data['attr']) . '<label for="' . $data['attr']['name'] . '">' . $data['label'] . '</label>' . '</div>';
    }

    public function select($data)
    {
        $data['attr']['class'] = 'form-control';
        return '<div class="form-floating mb-3">' . form_dropdown($data['attr'], $data['options']) . '<label for="' . $data['attr']['name'] . '">' . $data['label'] . '</label>' . '</div>';
    }

    public function group($data)
    {
        $result = '<div class="row mb-3">';
        foreach ($data['field'] as $form) {
            $result .= '<div class="col';
            $result .= empty($form['col']) ? '' : '-' . $form['col'];
            $result .= '">';
            $result .= $this->create($form);
            $result .= '</div>';
        }
        $result .= '</div>';
        return $result;
    }

    public function submit($attr)
    {
        return form_submit($attr);
    }

    public function close()
    {
        return form_close();
    }
}