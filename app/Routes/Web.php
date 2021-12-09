<?php

namespace App\Routes;

use App\Controller\HomeController;
use App\Controller\VehicleMarketController;
use App\Model\Car;
use App\Model\IPlane;
use App\Model\Plane;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;

class Web
{
    public static function init(App $app)
    {
        $app->get('/', [HomeController::class, 'index']);

        $app->get('/market', function(Response $response) {

            $plane1 = new Plane();
            $plane1->setName('Airbus-356');

            $car1 = new Car();
            $car1->setName('Camaro');

            $car2 = new Car();
            $car2->setName('Uno');

            $vehicleMarket = new VehicleMarketController([
                $plane1,
                $car1,
                $car2
            ]);

            return $vehicleMarket->listVehicles($response);
        });

        $app->get('/market/{type}', function(Response $response, $type) {
            $plane1 = new Plane();
            $plane1->setName('Airbur-356');

            $car1 = new Car();
            $car1->setName('Camaro');

            $vehicleMarket = new VehicleMarketController([
                $plane1,
                $car1
            ]);

            return $vehicleMarket->showSingleVehicle($response, $type);
        });
    }
}
