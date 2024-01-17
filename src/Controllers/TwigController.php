<?php

namespace Cp26\Dwwm4\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigController
{
    public function template($load)
    {
        $loader = new FilesystemLoader('src/Views/templates');
        $twig = new Environment($loader);

        return $twig->load($load);

        
    }
}