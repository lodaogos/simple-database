<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();\
        // Clear configuration cache every day at a specific time
        $schedule->command('config:clear')->dailyAt('03:00');

        // Clear route cache every day at a specific time
        $schedule->command('route:clear')->dailyAt('03:30');

        // Clear view cache every day at a specific time
        $schedule->command('view:clear')->dailyAt('04:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
