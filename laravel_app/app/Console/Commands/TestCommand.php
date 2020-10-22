<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var Logger
     */
    protected $logger;

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
     * @return mixed
     */
    public function handle()
    {
//        Log::channel('slack')->info('Something happened!');
        Log::channel('daily')->info('Estamos probando Slack');

        Log::channel('slack')->critical('Estamos probando Slack');
        echo 'Esto es un comando de pruebas para hacer scheduled';
    }
}
