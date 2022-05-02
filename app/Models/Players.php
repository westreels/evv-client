<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
   
   public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'players';
     
    protected $fillable = [
        'id', 'player_id', 'casino_id', 'balance', 'currency', 'nickname', 'latest_session',
    ];

}
