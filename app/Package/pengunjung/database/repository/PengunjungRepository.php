<?php

namespace App\Package\pengunjung\database\repository;

use App\Package\pengunjung\Model\Pengunjung;

class PengunjungRepository
{
    public function getAll()
    {

        return Pengunjung::all();
    }

    public function create($data) : Pengunjung {

        return Pengunjung::create($data);
    }

    public function edit($data,Pengunjung $pengunjung)
    {

        return $pengunjung->fill($data)->save();
    }

    public function delete(Pengunjung $pengunjung){

        return $pengunjung->delete();
    }

}
