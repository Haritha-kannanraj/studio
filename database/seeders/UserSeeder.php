<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
          'fname'=>'Abhishekh',
          'lname'=>'S.A.',
          'email'=>'abhi@gmail.com',
          'mobile'=>'1234567890',
          'password'=>Hash::make('12345')
        ]);
    }
}
