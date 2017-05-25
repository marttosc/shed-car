<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\City;


class CityRepository extends BaseRepository
{
    /**
     * @var
     */
    protected $model;

    public function __construct(City $state)
    {
        $this->model = $state;
    }

    /**
     * All states.
     */
    public function paginateAllCities($uf)
    {
        return $this->model->where('state', $uf)->orderBy('city', 'asc')->get();
    }

    /**
     * Get the city.
     * @param $city City code.
     * @return mixed
     */
    public function getCity($city)
    {
        return $this->find($city)->load('uf');
    }
}
