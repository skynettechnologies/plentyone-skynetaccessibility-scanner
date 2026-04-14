<?php

namespace SkynetAccessibilityScanner\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class SkynetAccessibilityScannerServiceProvider
 * @package SkynetAccessibilityScanner\Providers
 */
class SkynetAccessibilityScannerServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(SkynetAccessibilityScannerRouteServiceProvider::class);
    }
}