<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\User;


class UserRepository extends BaseRepository
{
    /**
     * @var
     */
    protected $model;

    /**
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function paginateUserAll()
    {
        return $this->all(['*'], ['user']);
    }

}
