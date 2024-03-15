<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'first_name' => 'Debby',
            'last_name' => 'Putri',
            'email' => 'debyputri@gmail.com',
            'phone' => '1234567890'
        ]);

    
    }
}
