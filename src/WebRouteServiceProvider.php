<?php

namespace Mods\Blog;

use Illuminate\Routing\Router;
use Mods\Support\RouteServiceProvider as ServiceProvider;

class WebRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Mods\Blog\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the "blog web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function registerWebRoutes(Router $router)
    {
    	$router->group([
            'namespace' => $this->namespace,
            'prefix' => config('blog.prefix', 'blog'),
            'as' => 'blog.'
        ], function ($router) {
            require __DIR__.'/../routes/web.php';
        });
    }
}
