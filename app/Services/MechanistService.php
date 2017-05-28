<?php

namespace Shed\Services;

use Shed\Repositories\MechanistRepository;

class MechanistService
{
    /**
     * @var MechanistRepository
     */
    private $repository;

    /**
     * @var CityService
     */
    private $cityService;

    public function __construct(MechanistRepository $repository, CityService $cityService)
    {
        $this->repository = $repository;
        $this->cityService = $cityService;
    }

    public function getAllMechanists()
    {
        return $this->repository->paginateMechanistAll();
    }

    public function findMechanist($id)
    {
        return $this->repository->find($id, ['*'], ['user']);
    }

    public function createMechanist($data, $user)
    {
        $data['user_id'] = $user->id;
        $data['city'] = $this->cityService->findCity($data['city'])['city'];

        return $this->repository->create($data);
    }

    public function updateMechanist($data, $id)
    {
        $data['city'] = $this->cityService->findCity($data['city'])['city'];

        return $this->repository->update($data, $id);
    }
}
