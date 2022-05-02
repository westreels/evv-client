<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use \App\Models\User;

class Transactions extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'casino_id', 'player_id', 'ownedBy', 'bet', 'win', 'balance-before', 'balance-after', 'currency', 'final', 'gameid', 'txid',  'type', 'rawdata', 'roundid', 'updated_at', 'created_at',
    ];

}

