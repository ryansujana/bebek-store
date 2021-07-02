<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('stoks')->insert([
    		'jumlah' => '10000'
    	]);
    	DB::table('stoks')->insert([
    		'jumlah' => '9000'
    	]);
    	DB::table('stoks')->insert([
    		'jumlah' => '8000'
    	]);
    	DB::table('stoks')->insert([
    		'jumlah' => '7000'
    	]);
    	DB::table('stoks')->insert([
    		'jumlah' => '6000'
    	]);
    	DB::table('stoks')->insert([
    		'jumlah' => '5000'
    	]);
    }
}
