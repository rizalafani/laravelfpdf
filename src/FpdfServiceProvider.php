<?php

namespace rizalafani\fpdflaravel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class FpdfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('fpdf', function()
        {
            return new Fpdf;
        });
    }
}
