<?php 

namespace Cp26\Dwwm4;

use Slim\Factory\AppFactory;

class Main
{   
    private $app;

    public function __construct()
    {
        
        $this->app = AppFactory::create();

        $this->initRouter();

    }

    public function initRouter()
    {
        // Add error middleware
        $this->app->addErrorMiddleware(true, true, true);

        // Add routes
        $this->app->get('/', 'Cp26\Dwwm4\Controllers\HomeController:stats');
        $this->app->get('/invoices', 'Cp26\Dwwm4\Controllers\InvoicesController:getAll');
        $this->app->get('/invoice', 'Cp26\Dwwm4\Controllers\InvoicesController:get');
        $this->app->get('/customers', 'Cp26\Dwwm4\Controllers\CustomersController:getAll');
        $this->app->get('/customer', 'Cp26\Dwwm4\Controllers\CustomersController:get');
        
        $this->app->run();
    }

    
}
