<?php

namespace App\Package\Tutorial\database\repository;

use App\Package\Base\Contrak\CrudRepositoryContrak;
use App\Package\Base\Contrak\CrudServiceContrak;
use App\Package\Menu\Model\Menu;
use App\Package\Tutorial\Model\Tutorial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class TutorialRepository implements CrudRepositoryContrak
{

    public function getAll()
    {
        return Tutorial::all();
    }

    public function create($data)
    {
        $result = Tutorial::create($data);

        return $result;
    }

    public function edit($data, Model $model)
    {

        return $model->fill($data)->save();
    }

    public function delete(Model $model)
    {
        return $model->delete();
    }

    public function createStep($data, Model|Tutorial $model)
    {

        return $model->steps()->create($data);
    }

    public function editStep($data, Model $model)
    {

        return $model->fill($data)->save();
    }

    public function deleteStep(Model $model)
    {
        return $model->delete();
    }

}
