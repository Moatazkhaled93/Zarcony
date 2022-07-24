<?php

namespace App\Providers;

//classes
use App\Repository\Eloquent\UserRepository;
use App\Repository\Eloquent\BrandRepository;
use App\Repository\Eloquent\ProductRepository;
//interfaces
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\Interfaces\BrandRepositoryInterface;
use App\Repository\Interfaces\ProductRepositoryInterface;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {

        // App Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository ::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository ::class);


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        //
    }

}
