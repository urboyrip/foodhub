<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'vendors_id' => 1,
                'name' => 'Beef Burger',
                'description' => 'ini beef burger enak banget',
                'price' => 20000,
                'picture'=> 'BeefBurger.png',
                'rating'=> 5
            ],
            [
                'vendors_id' => 1,
                'name' => 'Cheese Burger',
                'description' => 'ini keju burger enak banget',
                'price' => 15000,
                'picture'=> 'CheeseBurger.png',
                'rating'=> 3
            ],
            [
                'vendors_id' => 2,
                'name' => 'Nasi Goreng',
                'description' => 'Nasi Goreng enak banget bodo',
                'price' => 23000,
                'picture'=> 'NasiGoreng.png',
                'rating'=> 4
            ],
            [
                'vendors_id' => 2,
                'name' => 'Mie Goreng',
                'description' => 'Enak kok bismillah',
                'price' => 22000,
                'picture'=> 'MieGoreng.png',
                'rating'=> 3
            ],
            [
                'vendors_id' => 3,
                'name' => 'Soto Seger',
                'description' => 'Soto Suegerr poll',
                'price' => 10000,
                'picture'=> 'SotoSeger.png',
                'rating'=> 5
            ],
            [
                'vendors_id' => 3,
                'name' => 'Soto Ayam',
                'description' => 'Soto enak ayam juga enak',
                'price' => 12000,
                'picture'=> 'SotoAyam.png',
                'rating'=> 5
            ],
            [
                'vendors_id' => 3,
                'name' => 'Soto Daging',
                'description' => 'Soto enak Daging juga enak',
                'price' => 15000,
                'picture'=> 'SotoDaging.png',
                'rating'=> 4
            ],
            [
                'vendors_id' => 4,
                'name' => 'Rawon Setan',
                'description' => 'Rawon enak setan juga enak',
                'price' => 18000,
                'picture'=> 'RawonSetan.png',
                'rating'=> 4
            ]
        ]);
    }
}
