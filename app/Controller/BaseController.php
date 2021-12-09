<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;

class BaseController
{
    /**
     * 
     * @param Response $response
     * @param string $html
     * @return Response
     */
    public function responseHtml(Response $response, string $html): Response
    {
        $response->getBody()->write($html);
        $response->withHeader('Content-Type', 'html');
        return $response;
    }
}