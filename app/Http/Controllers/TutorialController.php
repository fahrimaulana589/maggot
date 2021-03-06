<?php

namespace App\Http\Controllers;

use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\service\TutorialService;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public TutorialService $tutorialService;

    /**
     * @param TutorialService $tutorialService
     */
    public function __construct(TutorialService $tutorialService)
    {
        $this->tutorialService = $tutorialService;
    }

    public function get(Tutorial $tutorial){

        return response()->json([
            "tutorial" => $tutorial
        ]);
    }

    public function getAll(){

        return response()->json([
            "tutorials" => $this->tutorialService->getAll()
        ]);

    }
}
