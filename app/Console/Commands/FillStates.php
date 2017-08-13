<?php

namespace App\Console\Commands;

use App\Repositories\StatesRepository;
use Illuminate\Console\Command;


class FillStates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:fillStates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private $stateRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(StatesRepository $stateRepository)
    {
        $this->stateRepository = $stateRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pointer = fopen('resources/assets/states.csv', 'r');
        $header = fgetcsv($pointer);
        while($file = fgetcsv($pointer)){
            $this->stateRepository->create($file);
        }

    }
}
