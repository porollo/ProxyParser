<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProxyList extends Model
{
    protected $fillable = [
        'ip', 'port', 'country', 'anonymity', 'availability', 'ping',
    ];
}
