<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Tutorial\Http\Requests\TutorialAddRequest;
use App\Package\Tutorial\Orchid\Layouts\TutorialAddEditLayout;
use Orchid\Support\Facades\Layout;

class TutorialAddScreen extends TutorialScreen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Buat TutorialController';
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
            $this->getOrchidComponent()->buttonSave(),
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
            Layout::block(TutorialAddEditLayout::class)
                ->title("TutorialController")
                ->description("Silahkan masukan data tutorial"),
            Layout::rows([
                $this->getOrchidRow()->rowContent("tutorial.description","Deskripsi"),
            ])
        ];
    }

    public function save(TutorialAddRequest $request){

        $this->getTutorialService()->create($request);

        $this->getOrchidComponent()->toastSukses("Buat","TutorialController");

        return redirect()->route("platform.websites.tutorials");
    }
}
