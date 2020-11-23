<?php

use App\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggan::create([
            'nama' => 'Pelanggan',
            'email' => 'pelanggan@gmail.com',
            'no_hp' => "0888",
            'alamat' => "imy",
            'password' => bcrypt('pelanggan'),
            'api_token' => bcrypt('pelanggan@gmail.com'),
        ]);
    }
}
