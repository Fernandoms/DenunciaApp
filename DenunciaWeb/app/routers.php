<?php
use Aura\Router\RouterFactory;

$router_factory = new RouterFactory();
$router = $router_factory->newInstance();
$cache = CACHE_PATH. '/routes.cache';

if (defined('PRODUCTION') && file_exists($cache)) {
    $routes = unserialize(file_get_contents($cache));
    $router->setRoutes($routes);
} else {

    // Home
    $router->add('Home.index', '/');
    
    //
    $router->add('Admin.view-reports', '/admin/view-reports{/page}/')->addTokens(array(
        'page' => 'page-([1-9][0-9]*)'
    ));
    
    // API
    $router->add('API.action', '/api/{action}/')->addTokens(array(
        'action' => 'login-user|create-report|add-comment|get-near-reports|teste'
    ));

    // Caching
    if (defined('PRODUCTION')) {
        $routes = $router->getRoutes();
        file_put_contents($cache, serialize($routes));
    }
}

