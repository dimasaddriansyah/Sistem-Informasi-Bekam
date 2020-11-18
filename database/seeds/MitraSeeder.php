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
            'nama' => 'Zakiyah',
            'email' => 'zakiyah@gmail.com',
            'password' => bcrypt('zakiyah'),
            'api_token' => bcrypt('zakiyah@gmail.com'),
        ]);
    }
}
