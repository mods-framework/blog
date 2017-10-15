<?php

namespace Mods\Blog;

use Illuminate\Routing\Router;
use Mods\Backend\Support\RouteServiceProvider as ServiceProvider;

class BackendRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Mods\Blog\Http\Controllers\Backend';


    /**
     * Define the "backend web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function registerBackendRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace,
            'prefix' => 'blog',
            'as' => 'blog.'
        ], function ($router) {
            require __DIR__.'/../routes/backend.php';
        });
    }
}
