<?php

namespace App\Console\Commands;

use App\Notifications\ValidateEmail;
use App\Notifications\ValidateEmailNotification;
use App\User;
use Illuminate\Console\Command;

class SendNewsLetterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:newsletter';

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
     * @return mixed
     */
    public function handle()
    {
        User::query()
            ->whereNotNull('email_verified_at')
            ->limit(5)
            ->each(function (User $user){
               $user->notify(new ValidateEmailNotification());
            });
    }
}
