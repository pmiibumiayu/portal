<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'         => 'superadmin@pmiibumiayu.com',
                'username'      => 'super',
                'fullname'      => 'Super Admin',
                'jenis_kelamin' => 'Laki-laki',
                'password_hash' => Password::hash('password'),
                'active'        => 1,
                'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
                'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
            ],
            [
                'email'         => 'admin@pmiibumiayu.com',
                'username'      => 'pengurus',
                'fullname'      => 'Pengurus Komisariat',
                'jenis_kelamin' => 'Laki-laki',
                'password_hash' => Password::hash('password'),
                'active'        => 1,
                'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
                'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
            ],
            [
                'email'         => 'user@pmiibumiayu.com',
                'username'      => 'kader',
                'fullname'      => 'Kader PMII',
                'jenis_kelamin' => 'Laki-laki',
                'password_hash' => Password::hash('password'),
                'active'        => 1,
                'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
                'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}