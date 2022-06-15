<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Menu;

class MenuModel extends Model
{
    protected $table            = 'panel_menu';
    protected $primaryKey       = 'group_id';
    protected $useAutoIncrement = true;
    protected $returnType       = Menu::class;
    protected $allowedFields    = ['menu'];

    protected $useTimestamps = true;
}