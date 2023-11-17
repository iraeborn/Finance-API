<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeModelInModelsDirectory extends Command
{
    protected $signature = 'make:model:models {name}';
    protected $description = 'Create a new Eloquent model in the Models directory';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');
        $modelPath = app_path('Models/' . $name . '.php');

        $this->call('make:model', [
            'name' => $modelPath,
        ]);

        $this->info('Model created successfully in the Models directory.');
    }
}
