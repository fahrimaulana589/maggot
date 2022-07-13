<?php

namespace App\Package\Artikel\service;

use App\Package\Artikel\database\repository\ArtikelRepository;
use App\Package\Artikel\Http\Requests\ArtikelAddRequest;
use App\Package\Artikel\Http\Requests\ArtikelEditRequest;
use App\Package\Artikel\Model\Artikel;
use App\Package\Page\Http\Requests\PageAddRequest;
use App\Package\Page\Http\Requests\PageEditRequest;
use App\Package\Page\Model\Page;

class ArtikelService
{
    public ArtikelRepository $artikelRepository;

    /**
     * @param ArtikelRepository $artikelRepository
     */
    public function __construct(ArtikelRepository $artikelRepository)
    {
        $this->artikelRepository = $artikelRepository;
    }

    public function getAll()
    {
        return $this->artikelRepository->getAll();
    }

    public function create(ArtikelAddRequest $request){

        $data = $request->validated();

        $this->artikelRepository->create($data["artikel"]);

    }

    public function edit(ArtikelEditRequest $request,Artikel $artikel){

        $data = $request->validated();

        $this->artikelRepository->edit($data["artikel"],$artikel);

    }

    public function delete(Artikel $artikel){

        $this->artikelRepository->delete($artikel);
    }


}
