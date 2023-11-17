<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use App\Providers\FinanceUserProvider;

class FinanceAuthProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();

        Passport::provider('custom', function ($app, array $config) {
            return new FinanceUserProvider($app->make('hash'), $config['model']);
        });
    }
}
