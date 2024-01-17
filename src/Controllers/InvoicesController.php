<?php

namespace Cp26\Dwwm4\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class InvoicesController extends TwigController
{
    public function getAll(Request $request, Response $response)
    {

        $template = $this->template('invoices.twig');

        $response->getBody()->write($template->render([
            'pageTitle' => 'Titre',
            'content' => 'Contenu',
        ]));

        return $response;
    }

    public function get(Request $request, Response $response)
    {

        $template = $this->template('invoice.twig');

        $response->getBody()->write($template->render([
            'pageTitle' => 'Titre',
            'content' => 'Contenu',
        ]));

        return $response;
    }
}
