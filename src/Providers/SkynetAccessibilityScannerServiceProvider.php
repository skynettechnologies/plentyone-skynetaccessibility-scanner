<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Plugin\ServiceProvider;
use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;

use IO\Extensions\Functions\Partial;


use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Webshop\Consent\Contracts\ConsentRepositoryContract;
use Plenty\Plugin\ConfigRepository;

/**
 * Class AllinOneAccessibilityServiceProvider
 * @package AllinOneAccessibility\Providers
 */
class SkynetAccessibilityScannerServiceProvider extends ServiceProvider
{
    /**
     * Register the route service provider
     */
    public function register()
    {
    }
    
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
            $partial->set('header', 'SkynetAccessibilityScanner::Index');
        }, self::PRIORITY);
    }
}