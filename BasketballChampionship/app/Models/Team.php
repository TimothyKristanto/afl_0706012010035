<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = ['name', 'team_location_origin', 'head_coach', 'total_championship'];

    public function championships(){
        return $this->hasMany(Championship::class, 'champion_team', 'id');
    }
}
