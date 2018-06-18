<?php

use Illuminate\Database\Seeder;

class ProxyListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ProxyList::class, 50)->create();
    }
}
