<?php

namespace App\Http\Controllers;

use App\Package\Artikel\Model\Artikel;
use App\Package\Artikel\service\ArtikelService;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public ArtikelService $artikelService;

    /**
     * @param ArtikelService $artikelService
     */
    public function __construct(ArtikelService $artikelService)
    {
        $this->artikelService = $artikelService;
    }


    public function getAll(){

        return response()->json([
            'artikels' => $this->artikelService->getAll(),
        ]);
    }

    public function get(Artikel $artikel){

        return response()->json([
            'artikel' => $artikel,
        ]);

    }
}
