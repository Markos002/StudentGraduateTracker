<?php

namespace App\Providers;

use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Services\Auth\RegisterServiceInterface;
use App\Interfaces\Services\UserServiceInterface;
use App\Repository\ListDataRepository;
use App\Repository\UserRepository;
use App\Services\Auth\RegisterService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class DependencyInjection extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Repositories
        $this->app->bind(ListDataRepositoryInterface::class, ListDataRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        // Services
        $this->app->bind(RegisterServiceInterface::class, RegisterService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }

    /**
     * Bootstrap services.  
     */
    public function boot(): void
    {
        //
    }
}
