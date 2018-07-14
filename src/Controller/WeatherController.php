<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Litchy21\WeatherLibrary\Weather;

class WeatherController extends Controller
{
    /**
     * @Route("/weather", name="weather")
     */
    public function index()
    {
        $weather = new Weather();

        return $this->render('weather/index.html.twig', [
            'weather' => $weather->getWeather(),
        ]);
    }
}
