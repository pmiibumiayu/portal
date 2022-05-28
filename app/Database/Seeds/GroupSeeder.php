<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'         => 'kader',
                'description'  => 'Kader PMII'
            ],
            [
                'name'         => 'pengurus',
                'description'  => 'Pengurus Komisariat'
            ],
            [
                'name'         => 'super',
                'description'  => 'Admin Teknisi Tertinggi'
            ],
        ];

        // Using Query Builder
        $this->db->table('auth_groups')->insertBatch($data);
    }
}