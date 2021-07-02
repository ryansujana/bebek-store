<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('telurs')->insert([
    		'nama' => 'Telur Bebek',
    		'stok_id' => 2,
    		'gambar' => 'bebek1.png'
    	]);
    	DB::table('telurs')->insert([
    		'nama' => 'Telur Bebek Asin',
    		'stok_id' => 1,
    		'gambar' => 'bebek2.png'
    	]);
    	DB::table('telurs')->insert([
    		'nama' => 'Telur Bebek Mini',
    		'stok_id' => 5,
    		'gambar' => 'bebek3.png'
    	]);
    	DB::table('telurs')->insert([
    		'nama' => 'Telur Bebek Asap',
    		'stok_id' => 4,
    		'gambar' => 'bebek4.png'
    	]);
    }
}
