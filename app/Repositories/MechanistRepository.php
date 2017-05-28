<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\Mechanist;


class MechanistRepository extends BaseRepository
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Mechanist $mechanist)
    {
        $this->model = $mechanist;
    }

    /**
     * All registered mechanist.
     */
    public function paginateMechanistAll()
    {
        return $this->all(['*'], ['user']);
    }

}
