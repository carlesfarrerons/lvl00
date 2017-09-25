<?php

use Illuminate\Database\Seeder;

class llibresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('llibres')->insert([
        	['titol' => 'titol1',
        	 'publicacio' => '10-10-2010',
        	  'tematica'=>'tema1'],
        	  ['titol' => 'titol2',
        	 'publicacio' => '02-10-2010',
        	  'tematica'=>'tema2'],
        	  ['titol' => 'titol3',
        	 'publicacio' => '03-10-2010',
        	  'tematica'=>'tema3']
        	]);
    }
}
