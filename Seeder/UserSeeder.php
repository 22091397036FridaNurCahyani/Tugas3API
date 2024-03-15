<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_user' => '01',
            'username' => 'Frida_NC',
            'password' => pyslqy('secret'),
            'name' => 'Frida NC'
        ]);

    }
}
