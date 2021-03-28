<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\HttpService;

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
     *
     * @var HttpService
     */
    private $httpClient;
    
    /**
     *
     * @var array
     */
    private $providers;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->httpClient = new HttpService;
        $this->providers = config('apiprovider');
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('api importing started');
        try {
            $this->withProgressBar($this->providers, function($provider) {
                $this->info('importing data from '. $provider['url']);
                $this->httpClient->getDataFromApi($provider);
            });
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
            return false;
        }
        return true;
    }
}
