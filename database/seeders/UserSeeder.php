<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('users')->insert([
        'name' => 'Admin',
        'email' =>'admin@gmail.com',
        'username' => 'superadmin',
        'phone' => '085156245768',
        'roles' => 'ADMIN',
        'password' => Hash::make('Aa.761834'),
    ]);

    }
}
