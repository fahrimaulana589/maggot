<?php

namespace App\Package\Tutorial\service;

use App\Package\Base\Contrak\CrudServiceContrak;
use App\Package\Menu\Model\Menu;
use App\Package\Tutorial\database\repository\TutorialRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class TutorialService implements CrudServiceContrak
{
    public TutorialRepository $tutorialRepository;

    /**
     * @param TutorialRepository $tutorialRepository
     */
    public function __construct(TutorialRepository $tutorialRepository)
    {
        $this->tutorialRepository = $tutorialRepository;
    }

    public function getAll()
    {
        return $this->tutorialRepository->getAll();
    }

    public function create(FormRequest $request)
    {
        $data = $request->validated();
        return $this->tutorialRepository->create($data["tutorial"]);
    }

    public function edit(FormRequest $request, Model $model)
    {
        $data = $request->validated();

        return $this->tutorialRepository->edit($data["tutorial"],$model);
    }

    public function delete(Model $model)
    {
        return $this->tutorialRepository->delete($model);
    }
}
