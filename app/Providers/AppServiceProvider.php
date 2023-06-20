<?php

namespace App\Providers;

use App\Services\Basket\Basket;
use App\Services\Cost\basketCost;
use App\Services\Cost\Contracts\CostInterface;
use App\Services\Cost\discountCost;
use App\Services\Discount\DiscountManager;
use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\SessionStorage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(StorageInterface::class, function ($app) {
            return new SessionStorage('cart');
        });

        $this->app->bind(CostInterface::class, function ($app) {
            $basketCost = new basketCost($app->make(Basket::class));
            $discountCost = new discountCost($basketCost , $app->make(DiscountManager::class));
            return $discountCost;
        });
    }
}
