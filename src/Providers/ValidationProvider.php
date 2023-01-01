<?php

namespace SrDev93\Validation\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ValidationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $response = Http::get('https://30uweb.com/api/check');
        return $response;
    }
}