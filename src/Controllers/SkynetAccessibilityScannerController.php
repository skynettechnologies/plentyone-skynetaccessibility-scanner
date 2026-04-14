<?php

namespace SkynetAccessibilityScanner\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class SkynetAccessibilityScannerController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('SkynetAccessibilityScanner::Index');
    }
}