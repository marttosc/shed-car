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
     * @return \Illuminate\Http\Response
     */
    public function index($uf)
    {
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
    public function show($uf, $city)
    {
        return $this->service->findCity($city);
    }
}
