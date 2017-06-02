<?php

namespace Shed\Services;

use Shed\Repositories\ReviewRepository;

class ReviewService
{
    /**
     * @var ReviewRepository
     */
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllReviews($mechanist)
    {
        return $this->repository->paginateAllReviews($mechanist);
    }

    public function getReview($id)
    {
        return $this->repository->find($id, ['*'], ['user']);;
    }

    public function createReview($data)
    {
        return $this->repository->create($data);
    }
}
