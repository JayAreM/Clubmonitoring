<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        //
        public function run()
    {
        DB::table('users') -> insert(
            [
                'name' => 'Admin One',
                'email' => 'adminone@gmail.com',
                'password' => Hash::make('password'),
                'role'=> 'Admin',

            ]
        );

        DB::table('users')->insert([
            'name' => 'Admin Two',
            'email' => 'admintwo@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Admin'
        ]);



    }

}
