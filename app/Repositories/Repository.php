<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    /**
     * Define relevant model
     *
     * @return Model|Builder
     */
    abstract public function model();

    public function query(): Builder
    {
        return $this->model()::query();
    }

    public function getAll()
    {
        return $this->query()->get();
    }

    /**
     * @return Builder|Model|object|null
     */
    public function first()
    {
        return $this->query()->first();
    }

    /**
     * @return Builder|Builder[]|Collection|Model|null|mixed
     */
    public function find($primaryKey)
    {
        return $this->query()->find($primaryKey);
    }

    /**
     * @return Builder|Builder[]|Collection|Model|null|mixed
     */
    public function findOrFail($primaryKey)
    {
        return $this->query()->findOrFail($primaryKey);
    }

    public function delete($primaryKey)
    {
        return $this->query()->destroy($primaryKey);
    }

    /**
     * @return Builder|Model|mixed
     */
    public function create(array $data)
    {
        return $this->query()->create($data);
    }

    /**
     * @return bool
     */
    public function update(Model $model, array $data)
    {
        return $model->update($data);
    }
}
