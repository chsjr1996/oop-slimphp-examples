<?php

namespace App\Controllers;

use DI\Container;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends BaseController
{
    private Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;   
    }

    /**
     *
     * @param Request $request
     * @param Response $response
     * @return Response 
     */
    public function index(Response $response): Response
    {
        return $this->view($this->container, $response, 'pages/home/index.twig');
    }
}
