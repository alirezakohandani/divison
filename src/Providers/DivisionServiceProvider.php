<?php

namespace Alirezakohandani\Dvision\Providers;

use Illuminate\Support\ServiceProvider;
use Vendor\Package\PublishesMigrations;


class DivisionServiceProvider extends ServiceProvider
{
    use PublishesMigrations;

    /**
     * @return void
     */
    public function boot()
    {
        $this->registerMigrations(__DIR__ . '/../database/migrations');
    }

}
