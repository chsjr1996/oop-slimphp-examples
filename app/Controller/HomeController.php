<?php

namespace App\Controller;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController
{
    /**
     *
     * @param Request $request
     * @param Response $response
     * @return Response 
     */
    public function index(Response $response)
    {
        $response->getBody()->write('Hello world!');
        return $response;
    }
}
