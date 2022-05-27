<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('GroupSeeder');
        // $this->call('UserSeeder');
        // $this->call('GroupUserSeeder');
        // $this->call('RuteSeeder');
        // $this->call('TiketSeeder');
        // $this->call('RentalSeeder');
        // $this->call('KendaraanSeeder');
        // $this->call('MenuSeeder');
        // $this->call('TestimoniSeeder');
        // $this->call('PreferensiSeeder');
        // $this->call('DestinasiSeeder');
    }
}