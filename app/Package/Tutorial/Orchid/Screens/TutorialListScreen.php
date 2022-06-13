<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Base\Orchid\Screens\OrchidScreen;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\Orchid\Layouts\TutorialListLayout;

class TutorialListScreen extends TutorialScreen
{

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        return [
            "tutorials" => $this->getTutorialService()->getAll()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Daftar Tutorial';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->getOrchidComponent()->linkAdd()
                ->route("platform.websites.tutorials.add")
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
            TutorialListLayout::class
        ];
    }

    public function remove(Tutorial $tutorial){

        $this->getTutorialService()->delete($tutorial);

        $this->getOrchidComponent()->toastSukses("Edit","Tutorial");
        
    }
}
