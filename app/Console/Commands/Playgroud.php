<?php

namespace App\Console\Commands;

use App\Mail\resetPassword;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Playgroud extends Command
{
   
    protected $signature = 'play';

    protected $description = 'Play Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        /**
         * @var User $user
         */
        $user = User::first();

        Mail::to($user)
        ->cc('copia@naooculta.com')
        ->bcc('copia@oculta.com')
        ->send(new resetPassword);

    }
}
