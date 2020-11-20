<?php

use App\Mitra;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mitra::create([
            'nama' => 'mitra',
            'email' => 'mitra@gmail.com',
            'no_hp' => "0888",
            'alamat' => "imy",
            'password' => bcrypt('mitra'),
            'api_token' => bcrypt('mitra@gmail.com'),
        ]);
    }
}
