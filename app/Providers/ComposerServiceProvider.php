<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.part.aside', 'App\Http\ViewComposers\AsideComposer');
        View::composer('frontend.part.header', 'App\Http\ViewComposers\MenuComposer');
        View::composer('frontend.part.footer', 'App\Http\ViewComposers\FooterComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
