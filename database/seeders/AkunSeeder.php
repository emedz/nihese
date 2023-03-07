<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
               'name'=>'Wandi Rustiawan',
               'email'=>'wandirustiawan035@gmail.com',
                'level'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
                'username' => 'petugas',
               'name'=>'Candra',
               'email'=>'candradwi@gmail.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
            ],
            [
                'username' => 'user',
               'name'=>'Lala',
               'email'=>'lalalatifa@gmail.com',
                'level'=>'user',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
