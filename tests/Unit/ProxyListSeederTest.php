<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProxyListSeederTest extends TestCase
{

    public function testSeederData()
    {

        factory()->create([
            'ip' => '92.168.100.100',
        ]);


        $this->seeInDatabase('proxy_lists', ['ip' => '192.168.100.100']);
    }
}