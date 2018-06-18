<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProxyList extends Model
{

    protected $table = 'proxy_lists';


    protected $fillable = [
        'ip', 'port', 'country', 'anonymity', 'availability', 'ping',
    ];
}
