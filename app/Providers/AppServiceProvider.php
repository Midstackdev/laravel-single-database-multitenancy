<?php

namespace App\Providers;

use App\Tenant\Manager;
use App\Tenant\Observers\TenantObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \DB::listen(function ($sql) {
        //     dump($sql->sql);
        // });

        $this->app->singleton(Manager::class, function () {
            return new Manager();
        });

        $this->app->singleton(TenantObserver::class, function () {
            return new TenantObserver(app(Manager::class)->getTenant());
        });
    }
}
