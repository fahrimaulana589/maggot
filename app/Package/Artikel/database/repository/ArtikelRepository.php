<?php

namespace App\Package\Artikel\database\repository;

use App\Package\Artikel\Model\Artikel;

class ArtikelRepository
{
    public function getAll()
    {

        return Artikel::all();
    }

    public function create($data) : Artikel {

        return Artikel::create($data);
    }

    public function edit($data,Artikel $artikel)
    {

        return $artikel->fill($data)->save();
    }

    public function delete(Artikel $artikel){

        return $artikel->delete();
    }
}
