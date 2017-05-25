<?php

namespace Shed\Services;

use Shed\Repositories\StateRepository;

class StateService
{
    /**
     * @var StateRepository
     */
    private $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllStates()
    {
        return $this->repository->paginateAllStates();
    }

    public function findState($uf)
    {
        return $this->repository->getState($uf);
    }
}
