<?php

namespace App\Controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class BaseController
{
    /**
     * @param Container $container
     * @param Response $response
     * @param string $viewPath
     * @param array $data
     * @return Response
     */
    protected function view(
        Container $container,
        Response $response,
        string $viewPath,
        array $data = []
    ): Response {
        /** @var Twig */
        $view = $container->get('view');
        return $view->render($response, $viewPath, $data);
    }
}
