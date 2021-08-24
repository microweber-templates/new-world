<?php


namespace MicroweberPackages\Template\NewWorld;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{


    public function boot()
    {

    }

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations/');

    }


}
