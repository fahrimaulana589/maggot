<?php

namespace App\Package\Tutorial\service;

use App\Package\Base\Contrak\CrudServiceContrak;
use App\Package\Menu\Model\Menu;
use App\Package\Tutorial\database\repository\TutorialRepository;
use App\Package\Tutorial\Http\Requests\StepAddRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Orchid\Attachment\File;
use Orchid\Attachment\Models\Attachment;

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

        return $this->tutorialRepository->edit($data["tutorial"], $model);
    }

    public function delete(Model $model)
    {
        return $this->tutorialRepository->delete($model);
    }

    public function createStep(FormRequest $request, Model $model)
    {
        $data = $request->validated();

        $attachment = Attachment::whereIn("id", $data["step"]["video"])->first();

        $data["step"]["video"] = $attachment->path . $attachment->name . "." . $attachment->extension;

        return $this->tutorialRepository->createStep($data["step"], $model);
    }

    public function editStep(FormRequest $request, Model $model)
    {

        $data = $request->validated();
        $is_exist = array_key_exists("video", $data["step"]);

        if ($is_exist) {
            $attachment = Attachment::whereIn("id", $data["step"]["video"])->first();
            $data["step"]["video"] = $attachment->path . $attachment->name . "." . $attachment->extension;
        }else{
            $data["step"]["video"] = $model->video;
        }

        return $this->tutorialRepository->editStep($data["step"], $model);
    }

    public function deleteStep(Model $model)
    {
        return $this->tutorialRepository->deleteStep($model);
    }
}
