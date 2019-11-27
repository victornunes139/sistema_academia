<?php

namespace App\Providers;

use App\Contracts\Repositories\PersonRepository;
use App\Repositories\PersonRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PersonRepository::class, PersonRepositoryEloquent::class);
    }
}
