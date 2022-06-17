<?php

namespace App\Http\Controllers;

use App\Package\Tutorial\Model\Step;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\service\TutorialService;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public TutorialService $tutorialService;

    /**
     * @param TutorialService $tutorialService
     */
    public function __construct(TutorialService $tutorialService)
    {
        $this->tutorialService = $tutorialService;
    }

    public function get(Tutorial $tutorial,Step $step){
        $tutorial->steps()->findOrFail($step->id);

        return response()->json([
            "step" => $step
        ]);
    }

    public function getAll(Tutorial $tutorial){

        return response()->json([
            "steps" => $tutorial->steps
        ]);

    }
}
