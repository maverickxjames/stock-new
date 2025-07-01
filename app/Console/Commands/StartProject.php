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

        // if app.env is quual to production 

        if(env('APP_ENV') == 'production') {
            $this->info('Running in production mode');
            $commands = [
                'php artisan optimize',
                'docker-compose up -d',
                'php artisan queue:listen > /dev/null 2>&1 &',
                'php artisan queue:work > /dev/null 2>&1 &',
                'sudo supervisorctl restart markettradedata > /dev/null 2>&1 &',
                'sudo supervisorctl restart marketdata > /dev/null 2>&1 &',
                'sudo supervisorctl restart websockets > /dev/null 2>&1 &',
            ];
        }else{
$phpPath = 'X:\xampp\php\php.exe'; // Adjust this to your actual PHP path

$commands = [
    "$phpPath artisan optimize",
    'docker-compose up -d',
    "start /b $phpPath artisan queue:work",
    "start /b $phpPath artisan market:fetch-trade-updates",
    "start /b $phpPath artisan market:fetch-updates",
    "start /b $phpPath artisan market:fetch-indices",
];
        }

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
