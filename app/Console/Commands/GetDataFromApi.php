<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetDataFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'to-do:load';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get data from api providers';

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
        echo 0;
    }
}
