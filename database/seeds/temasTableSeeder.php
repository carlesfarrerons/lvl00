<?php

use Illuminate\Database\Seeder;

class temasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('temas')->insert([
        	['nom' => 'tema10'],
        	['nom' => 'tema20']
        	]);
    }
}
