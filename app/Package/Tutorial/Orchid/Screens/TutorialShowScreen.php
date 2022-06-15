<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Tutorial\Model\Step;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\Orchid\Layouts\TutorialShowLayout;
use Orchid\Screen\Screen;

class TutorialShowScreen extends TutorialScreen
{
    public Tutorial $tutorial;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Tutorial $tutorial): iterable
    {
        $this->tutorial = $tutorial;

        return [
            "steps" => $this->tutorial->steps
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->tutorial->title;
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->getOrchidComponent()->linkBack()
                ->route("platform.websites.tutorials"),
            $this->getOrchidComponent()->linkAdd()
                ->route("platform.websites.tutorials.steps.add",$this->tutorial->id),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            TutorialShowLayout::class
        ];
    }

    public function remove(Step $step){

        $this->getTutorialService()->deleteStep($step);

        $this->getOrchidComponent()->toastSukses("Hapus","Step");
    }
}
