<?php

namespace Shed\Services;

use Shed\Repositories\CityRepository;

class CityService
{
    /**
     * @var CityRepository
     */
    private $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllCities($uf)
    {
        return $this->repository->paginateAllCities($uf);
    }

    public function findCity($city)
    {
        return $this->repository->getCity($city);
    }
}
