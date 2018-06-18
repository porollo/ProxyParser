<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ProxyList::class, function (Faker $faker) {
    return [
        'ip' => $faker->ipv4,
        'port' => "9995",
        'country' => $faker->country,
        'anonymity' => "High",
        'availability' => "Medium",
        'ping' => "11.5 ms",
        'remember_token' => str_random(10),
    ];
});
