<?php 

namespace Cp26\Dwwm4\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends TwigController
{
    public function stats(Request $request, Response $response)
    {
        $template = $this->template('index.twig');

        $response->getBody()->write($template->render([
            'pageTitle' => 'Titre',
            'content' => 'Contenu',
        ]));

        return $response;
    }
}