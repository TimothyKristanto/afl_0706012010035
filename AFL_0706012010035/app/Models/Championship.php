<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    use HasFactory;

    protected $table = 'championships';

    protected $fillable = ['name', 'year', 'league', 'championship_mvp', 'champion_team'];

    public function team(){
        return $this->belongsTo(Team::class, 'champion_team', 'id');
    }
}
