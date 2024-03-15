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
            'first_name' => 'Frida',
            'last_name' => 'NC',
            'email' => 'frida.22036@mhs.unesa.ac.id',
            'phone' => '085655313012'
        ]);

    
    }
}
