<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;
   
   public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'sessions';
     
    protected $fillable = [
        'id', 'player_id', 'casino_id', 'session_id', 'params', 'tableid', 'rawdata', 'created_at', 'updated_at',
    ];

}
