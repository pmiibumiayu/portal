<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'group_id'      => 1,
                'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
                'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
            ],
            [
                'group_id'      => 2,
                'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
                'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
            ],
            [
                'group_id'      => 3,
                'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
                'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
            ],
        ];
        // insert to table
        $this->db->table('panel_menu')->insertBatch($data);
    }
}