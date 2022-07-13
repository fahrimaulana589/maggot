<?php

namespace App\Package\pengunjung\service;

use App\Package\pengunjung\Http\Requests\PengunjungAddRequest;
use App\Package\pengunjung\Http\Requests\PengunjungEditRequest;
use App\Package\pengunjung\database\repository\PengunjungRepository;
use App\Package\pengunjung\Model\Pengunjung;
use GetStream\Stream\Client;
use Illuminate\Support\Str;

class PengunjungService
{
    public PengunjungRepository $pengunjungRepository;

    /**
     * @param PengunjungRepository $pengunjungRepository
     */
    public function __construct(PengunjungRepository $pengunjungRepository)
    {
        $this->pengunjungRepository = $pengunjungRepository;
    }

    public function getAll()
    {

        return $this->pengunjungRepository->getAll();

    }

    public function create(PengunjungAddRequest $request)
    {

        $data = $request->validated();

        $data["pengunjung"]["id_chat"] = Str::uuid();

        $client = new Client('qqrtgeabdxca', '5fxzp73p4cvvndq6aw3xuapzcmdf9vku8gsw8q6zdty5hf93nrwf8m8q4tds9k7u');

        $userToken = $client->createUserSessionToken($data["pengunjung"]["id_chat"]);

        $data["pengunjung"]["token"] = $userToken;

        $this->pengunjungRepository->create($data["pengunjung"]);

    }

    public function edit(PengunjungEditRequest $request, Pengunjung $pengunjung)
    {

        $data = $request->validated();

        if($data["pengunjung"]["password"] == null){
            unset($data["pengunjung"]["password"]);
        }

        $this->pengunjungRepository->edit($data["pengunjung"], $pengunjung);

    }

    public function delete(Pengunjung $page)
    {

        $this->pengunjungRepository->delete($page);

    }

}
