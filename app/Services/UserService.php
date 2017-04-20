<?php

namespace Shed\Services;

use Shed\Events\NewUserRegistered;
use Shed\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllUsers()
    {
        return $this->repository->paginateUserAll();
    }

    public function findUser($id)
    {
        return $this->repository->find($id);
    }

    public function createUser($data)
    {
        $data['password'] = \Hash::make($data['password']);

        $user = $this->repository->create($data);

        event(new NewUserRegistered($user));

        return $user;
    }
}
