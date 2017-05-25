<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\State;


class StateRepository extends BaseRepository
{
    /**
     * @var
     */
    protected $model;

    public function __construct(State $state)
    {
        $this->model = $state;
    }

    /**
     * All states.
     */
    public function paginateAllStates()
    {
        return $this->all();
    }

    /**
     * Get the state.
     * @param $uf State code.
     * @return mixed
     */
    public function getState($uf)
    {
        return $this->findBy('uf', $uf);
    }
}
