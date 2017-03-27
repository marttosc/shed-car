<?php

namespace Shed\Services;

use Shed\Repositories\MechanistRepository;

class MechanistService
{
	/**
	 * @var MechanistRepository
	 */
	private $repository;

	public function __construct(MechanistRepository $repository)
	{
		$this->repository = $repository;
	}

	public function getAllMechanists()
	{
		return $this->repository->paginateMechanistAll();
	}
}