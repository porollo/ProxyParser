<?php

namespace App\Console;

use App\Console\Commands\PingProxyHostsByCron;
use App\Console\Commands\RefreshProxyHosts;
use App\Console\Commands\RefreshProxyHostsByCron;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\PingProxyHosts::class,
        \App\Console\Commands\PingProxyHostsByCron::class,
        \App\Console\Commands\RefreshProxyHosts::class,
        \App\Console\Commands\RefreshProxyHostsByCron::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(PingProxyHosts::class, ['--force'])->everyMinute();
        $schedule->command(PingProxyHostsByCron::class, ['--force'])->cron('* * * * * *');

        $schedule->command(RefreshProxyHosts::class, ['--force'])->everyMinute();
        $schedule->command(RefreshProxyHostsByCron::class, ['--force'])->cron('* * * * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
