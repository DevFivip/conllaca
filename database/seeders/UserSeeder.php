<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'Adolfo Gabazutt',
            'email' => 'adolfo.gbztt@gmail.com',
            'password' => bcrypt('adolfo2403'),
        ]);
    }
}
