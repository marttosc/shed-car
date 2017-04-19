<?php


namespace Shed\Repositories\Eloquent;

use Exception;
use Shed\Repositories\Contract\RepositoryInterface;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Container\Container as App;

/**
 * Class Repository
 * @package Shed\Repositories\Eloquent
 */
abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var App
     */
    private $app;

    /**
     * @var
     */
    protected $model;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->app = app();
        $this->makeModel();
    }

    /**
     * @param array $columns
     * @param array $with
     * @return mixed
     */
    public function all($columns = ['*'], $with = [])
    {
        if (count($with) > 0) {
            return $this->model->with($with)->get();
        }

        return $this->model->get($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = ['*'])
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->delete($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @param array $with
     * @return mixed
     */
    public function find($id, $columns = ['*'], $with = [])
    {
        if (count($with) > 0) {
            return $this->model->with($with)->find($id, $columns);
        }

        return $this->model->find($id, $columns);
    }


    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = ['*'])
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws Exception
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model);

        if (!$model instanceof Model)
            throw new Exception("Class {$this->model()} must be an instance of Jenssegers\\Mongodb\\Eloquent\\Model");

        return $this->model = $model->newQuery();
    }
}
