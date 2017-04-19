<?php

namespace Shed\Repositories\Contract;


interface RepositoryInterface
{

    public function all();

    public function paginate($perPage = 15, $columns = ['*']);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = ['*']);

    public function findBy($field, $value, $columns = ['*']);

}