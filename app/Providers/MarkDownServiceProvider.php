<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;

use League\CommonMark\Extension\Table\TableExtension;

class MarkDownServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('markdown', function () {

            $converter = new CommonMarkConverter([
                'allow_unsafe_links' => false,
                'html_input' => 'strip'
            ]);

            return $converter;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}