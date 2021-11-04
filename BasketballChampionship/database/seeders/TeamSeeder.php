<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teams')->insert([
            'name'=>'Golden State Warriors',
            'team_location_origin'=>'San Francisco',
            'head_coach'=>'Steve Kerr',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name'=>'Lakers',
            'team_location_origin'=>'Los Angeles',
            'head_coach'=>'Frank Vogel',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name'=>'Clippers',
            'team_location_origin'=>'Los Angeles',
            'head_coach'=>'Tyronn Lue',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
    }
}
