<?php

namespace App\Package\Slide\service;

use App\Package\Page\Http\Requests\PageAddRequest;
use App\Package\Page\Http\Requests\PageEditRequest;
use App\Package\Page\Model\Page;
use App\Package\Slide\database\repository\SlideRepository;
use App\Package\Slide\Http\Requsets\SlideAddRequest;
use App\Package\Slide\Http\Requsets\SlideEditRequest;
use App\Package\Slide\Model\Slide;

class SlideService
{

    public SlideRepository $slideRepository;

    /**
     * @param SlideRepository $slideRepository
     */
    public function __construct(SlideRepository $slideRepository)
    {
        $this->slideRepository = $slideRepository;
    }


    public function getAll()
    {
        return $this->slideRepository->getAll();
    }

    public function create(SlideAddRequest $request){

        $data = $request->validated();

        $this->slideRepository->create($data);

    }

    public function edit(SlideEditRequest $request,Slide $slide){

        $data = $request->validated();

        $this->slideRepository->edit($data,$slide);

    }

    public function delete(Slide $slide){

        $this->slideRepository->delete($slide);
    }
}
