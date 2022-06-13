<?php

namespace App\Package\Profile\service;

use App\Package\Profile\database\repository\ProfileRepository;
use App\Package\Profile\Http\Requsets\ProfileAddRequest;
use App\Package\Profile\Http\Requsets\ProfileEditRequest;
use App\Package\Profile\Model\Profile;

class ProfileService
{
    public ProfileRepository $profileRepository;

    /**
     * @param ProfileRepository $profileRepository
     */
    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function getAll()
    {
        return $this->profileRepository->getAll();
    }

    public function create(ProfileAddRequest $request){

        $data = $request->validated();

        $this->profileRepository->create($data);

    }

    public function edit(ProfileEditRequest $request){

        $data = $request->validated();
        $data["id"] = 1;

        $this->profileRepository->edit($data);

    }

    public function delete(Profile $profile){

        $this->profileRepository->delete($profile);
    }

    public function get()
    {
        return Profile::find(1);
    }

}
