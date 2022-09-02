<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class NewUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create new user for a test';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::insert('insert into test (name, surname) values (?, ?)', [ 'Marc', 'Spector']);
    }
}
