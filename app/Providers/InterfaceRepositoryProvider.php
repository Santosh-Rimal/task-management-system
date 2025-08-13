<?php

namespace App\Providers;

use App\Interfaces\IndexInterface;
use App\repositries\IndexRepository;
use Illuminate\Support\ServiceProvider;

class InterfaceRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IndexInterface::class,IndexRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       
    }
}