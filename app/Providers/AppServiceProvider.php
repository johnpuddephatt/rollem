<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer("*", function ($view) {
            $view->with(
                "settings",
                \Cache::rememberForever("settings", function () {
                    return nova_get_settings();
                })
            );
            $view->with(
                "primary_menu",
                \Cache::rememberForever("primaryMenu", function () {
                    return nova_get_menu_by_slug("header")
                        ? nova_get_menu_by_slug("header")["menuItems"]
                        : [];
                })
            );
        });

        \Blade::directive("icon", function ($arguments) {
            // Funky madness to accept multiple arguments into the directive
            list($string, $class) = array_pad(
                explode(",", trim($arguments, "() ")),
                2,
                ""
            );

            $string = trim($string, "' ");
            $class = trim($class, "' ");
            if (!$string) {
                return null;
            }

            return "{!! str_replace('<svg ', '<svg class=\"{$class}\" ', $string) !!}";
        });
    }
}
