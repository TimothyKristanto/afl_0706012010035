<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('championships')->insert([
            'name'=>'NBA Finals 2018',
            'year'=>'2018',
            'league'=>'NBA',
            'championship_mvp'=>'Kevin Durant',
            'champion_team'=>1000,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);

        DB::table('championships')->insert([
            'name'=>'NBA Finals 2017',
            'year'=>'2017',
            'league'=>'NBA',
            'championship_mvp'=>'Kevin Durant',
            'champion_team'=>1000,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);

        DB::table('championships')->insert([
            'name'=>'NBA Finals 2020',
            'year'=>'2020',
            'league'=>'NBA',
            'championship_mvp'=>'Lebron James',
            'champion_team'=>1001,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
    }
}
