<?php

use App\SuperAdmin;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuperAdmin::create([
            'nama' => 'super',
            'email' => 'super@gmail.com',
            'password' => bcrypt('super'),
            'api_token' => bcrypt('super@gmail.com'),
        ]);
    }
}
