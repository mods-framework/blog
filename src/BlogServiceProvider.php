<?php

namespace Mods\Blog;

use Mods\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app['events']->subscribe(Events\MenuEventSubscriber::class);

        $this->loadViewsFrom(__DIR__.'/../view', 'blog');
        $this->loadAssetsFrom(__DIR__.'/../assets', 'blog', 'blog');


        $this->loadTranslationsFrom(__DIR__.'/../lang', 'blog');

        $this->publishes([
            __DIR__.'/../lang' => resource_path('lang/vendor/blog'),
        ]);


        /*$this->mergeRecursiveConfigFrom(
            __DIR__.'/../config/blog.php', 'blog'
        );*/

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
