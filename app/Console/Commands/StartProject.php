<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class StartProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dabba:chalu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $commands = [
        //     'php artisan optimize',
        //     'docker-compose up -d',
        //     'php artisan websockets:serve',
        //     'php artisan serve',
        //     'php artisan queue:listen',
        //     'php artisan queue:work'
        // ];

        // for Linux 

        // $commands = [
        //     'php artisan optimize',
        //     'docker-compose up -d',
        //     // 'php artisan queue:listen > /dev/null 2>&1 &',
        //     'php artisan queue:work > /dev/null 2>&1 &',
        //     'sudo supervisorctl restart markettradedata > /dev/null 2>&1 &',
        //     'sudo supervisorctl restart marketdata > /dev/null 2>&1 &',
        //     'sudo supervisorctl restart websockets > /dev/null 2>&1 &',
        // ];

        // for Windows 

        $commands = [
            'php artisan optimize',
            'docker-compose up -d',
            'start /b php artisan websockets:serve',
            'start /b php artisan serve',
            'start /b php artisan queue:work',
            'start /b php artisan market:fetch-trade-updates',
            'start /b php artisan market:fetch-updates',
            'start /b php artisan market:fetch-indices',

            // 'start /b php artisan queue:work'
        ];

        foreach ($commands as $command) {
            $this->info("Running: $command");

            $process = Process::fromShellCommandline($command);
            $process->setTimeout(0); // No timeout
            $process->run(function ($type, $buffer) {
                echo $buffer;
            });

            if (!$process->isSuccessful()) {
                $this->error("Failed: $command");
            }
        }

        $this->info('All commands executed successfully.');
    }
}
