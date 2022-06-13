<?php

namespace App\Package\Profile\database\repository;

use App\Package\Profile\Model\Profile;

class ProfileRepository
{

    public function getAll()
    {

        return Profile::all();
    }

    public function create($data) : Profile {

        return Profile::create($data["profile"]);
    }

    public function edit($data)
    {
        $profile = Profile::where('id',1)->first();

        if ($profile !== null) {
            return $profile->fill($data["profile"])->save();
        } else {
            return Profile::create($data["profile"]);
        }
        
    }

    public function delete(Profile $profile){

        return $profile->delete();
    }

}
