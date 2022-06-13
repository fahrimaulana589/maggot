<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Base\Orchid\Screens\OrchidScreen;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\service\TutorialService;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Parent_;

class TutorialScreen extends OrchidScreen
{

    public function getTutorialService(): TutorialService
    {
        return app()->make(TutorialService::class);
    }

    public function permission(): ?iterable
    {
        return [
            "platform.websites.tutorials"
        ];
    }

}
