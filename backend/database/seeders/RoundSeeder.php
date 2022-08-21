<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rounds')->insert([
            'id' => 1,
            'description' => 'Quartas de finais'
        ]);

        DB::table('rounds')->insert([
            'id' => 2,
            'description' => 'Semi finais'
        ]);
        
        DB::table('rounds')->insert([
            'id' => 3,
            'description' => 'Disputa de terceiro e quarto lugar'
        ]);
        
        DB::table('rounds')->insert([
            'id' => 4,
            'description' => 'Final'
        ]);

    }
}
