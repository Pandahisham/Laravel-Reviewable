<?php

namespace DraperStudio\Reviewable;

use Illuminate\Support\ServiceProvider as IlluminateProvider;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends IlluminateProvider
{
    public function boot()
    {
        $migrationFrom = __DIR__.'/../database/migrations/create_reviews_table.php';
        $migrationTo = database_path('/migrations/'.date('Y_m_d_His', time()).'_create_reviews_table.php');

        $this->publishes([$migrationFrom => $migrationTo], 'migrations');
    }

    public function register()
    {
        //
    }
}
