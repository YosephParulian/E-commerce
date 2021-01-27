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
        DB::table('users')->insert([
        [
            'name'=>'Yoseph',
            'email'=>'yoseph.tdf@gmail.com',
            'password'=>Hash::make('12345'),
        ],
        [
            'name'=>'Udin',
            'email'=>'udin.tdf@gmail.com',
            'password'=>Hash::make('12345'),
        ]
        
        ]);
    }
}
