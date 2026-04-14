<?php

namespace SkynetAccessibilityScanner\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class SkynetAccessibilityScannerRouteServiceProvider
 * @package SkynetAccessibilityScanner\Providers
 */
class SkynetAccessibilityScannerRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','SkynetAccessibilityScanner\Controllers\SkynetAccessibilityScannerController@getHelloWorldPage');
    }
}