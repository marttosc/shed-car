<?php

namespace Shed\Repositories;

use Shed\Entities\Review;
use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Services\MechanistService;


class ReviewRepository extends BaseRepository
{
    /**
     * @var
     */
    protected $model;

    /**
     * @var
     */
    protected $mechanist;

    public function __construct(Review $review, MechanistService $mechanist)
    {
        $this->model = $review;
        $this->mechanist = $mechanist;
    }

    public function paginateAllReviews($mechanist)
    {
        return $this->mechanist->findMechanist($mechanist)->reviews->load('user');
    }
}
