<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'id' => '01',
            'id_contact' => 1,
            'street' => '123 Main St',
            'city' => 'New York',
            'province' => 'NY',
            'country' => 'USA',
            'postal_code' => '10001'
        ]);

    }
}
