<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'name'=>'Panasonic Tv',
            'price'=>'400',
            'category'=>'tv',
            'description'=>'A smart tv with much more feature',
            'gallery'=>'https://www.google.com/aclk?sa=l&ai=DChcSEwiK9fiP3rHuAhVMD3IKHQtmB9UYABAFGgJzZg&sig=AOD64_1XsuBzo_OMt69JomsUKa6zvPA1xw&adurl&ctype=5&ved=2ahUKEwjm8-6P3rHuAhWGXn0KHRgDD7oQvhd6BAgBEDQ'
        ],
        [
            'name'=>'Sony Tv',
            'price'=>'500',
            'category'=>'tv',
            'description'=>'A tv with much more feature',
            'gallery'=>'https://www.google.com/aclk?sa=l&ai=DChcSEwjM4a6j3rHuAhUCJSsKHcleC7QYABALGgJzZg&sig=AOD64_3OpTbBaTQ3lM2RtTDs4tqap9MMGA&adurl&ctype=5&ved=2ahUKEwjKtKKj3rHuAhXygUsFHR0uAdEQvhd6BAgBEDs'
        ],
        [
            'name'=>'LG fridge',
            'price'=>'200',
            'category'=>'mobile',
            'description'=>'A fridge with much more feature',
            'gallery'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.istyle.im%2Fimages%2Fproduct%2Fweb%2F88%2F52%2F70%2F00%2F0%2F000000705288_01_800.jpg&imgrefurl=https%3A%2F%2Fm.istyle.id%2FLG-Fridge-Multi-Door-Matte-Black-Steel-GC-Q22FTQKL-1201877-000000705288.do&tbnid=SFmyt9WSTPlihM&vet=12ahUKEwjmouyy3rHuAhVLgEsFHc9jBJwQMygAegUIARCzAQ..i&docid=_oePxHB7UoJSuM&w=800&h=800&q=LG%20fridge&safe=strict&ved=2ahUKEwjmouyy3rHuAhVLgEsFHc9jBJwQMygAegUIARCzAQ'
        ]
    
    ]);
    }
}
