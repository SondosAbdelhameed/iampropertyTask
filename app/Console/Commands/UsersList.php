<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\User;

class UsersList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return Users Registered List';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info(User::all());
        //return User::all();
    }
}
