<?php

namespace App\Controller;

use App\Model\ICar;
use App\Model\IPlane;
use Psr\Http\Message\ResponseInterface as Response;

class VehicleMarketController extends BaseController
{
    private array $vehicles;

    public function __construct(array $vehicles)
    {
        $this->vehicles = $vehicles;
    }

    /**
     * List all vehicles
     * 
     * @param Response $response
     * @return Response
     */
    public function listVehicles(Response $response): Response
    {
        $html = '<ul>';
        foreach ($this->vehicles as $vehicle) {
            $html.= "<li>" . $vehicle->getName() . "</li>";
        }
        $html.= "</ul>";

        return $this->responseHtml($response, $html);
    }

    /**
     * Show the first car
     * 
     * @param Response $response
     * @return Response
     */
    public function showSingleVehicle(Response $response, string $vehicleType): Response
    {
        $vehicle = null;

        $types = [
            'car' => Icar::class,
            'plane' => IPlane::class,
        ];

        if (!key_exists($vehicleType, $types)) {
            return $this->responseHtml($response, "<p>Vehicle type '{$vehicleType}' not registered...");
        }

        foreach ($this->vehicles as $vehicle) {
            if ($vehicle instanceof $types[$vehicleType]) {
                $vehicle = $vehicle;
                break;
            }
        }

        $html = "The {$vehicleType} name is: " . $vehicle->getName();
        return $this->responseHtml($response, $html);
    }
}