<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class GameOptions extends Model
{
        public $timestamps = true;

    use HasFactory;


        use HasFactory;
    //protected $connection = 'mysql-api';

    protected $table = 'gameoptions';
     
    protected $fillable = [
        'id', 'apikey', 'operator', 'operatorurl', 'operator_secret', 'livecasino_prefix', 'slots_prefix', 'virtualsports_prefix', 'evoplay_prefix', 'poker_prefix', 'bankgroup', 'bankgroupeur', 'bonusbankgroup', 'bonusgroupeur', 'callbackurl', 'sessiondomain', 'statichost', 'virtualsports_enabled', 'created_at', 'updated_at', 'newevoplay', 'livecasino_enabled', 'arcade_enabled', 'logo', 'cashier_url'
    ];
    
}
