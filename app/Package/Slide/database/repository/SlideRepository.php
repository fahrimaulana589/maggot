<?php

namespace App\Package\Slide\database\repository;

use App\Package\Page\Model\Page;
use App\Package\Slide\Http\Requsets\SlideAddRequest;
use App\Package\Slide\Http\Requsets\SlideEditRequest;
use App\Package\Slide\Model\Slide;

class SlideRepository
{


    public function getAll()
    {
        return Slide::all();
    }

    public function create($data){

        return Slide::create($data['slide']);
    }

    public function edit($data,Slide $slide){

        return $slide->fill($data["slide"])->save();
    }

    public function delete(Slide $slide){

        return $slide->delete();
    }
}
