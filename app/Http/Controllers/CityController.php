<?php

namespace Shed\Http\Controllers;

use Shed\Services\CityService;

class CityController extends Controller
{

    /**
     * @var CityService
     */
    protected $service;

    public function __construct(CityService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $uf
     * @return \Illuminate\Http\Response
     */
    public function index($uf = null)
    {
        if (is_null($uf)) {
            return $this->service->getAllCities();
        }

        $uf = strtoupper($uf);

        return $this->service->getAllCities($uf);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $uf
     * @param  mixed $city
     * @return \Illuminate\Http\Response
     */
    public function show($uf, $city = null)
    {
        if (is_null($city)) {
            return $this->service->findCity($uf);
        }

        return $this->service->findCity($city);
    }
}
