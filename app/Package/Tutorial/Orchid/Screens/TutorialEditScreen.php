<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Tutorial\Http\Requests\TutorialEditRequest;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\Orchid\Layouts\TutorialAddEditLayout;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class TutorialEditScreen extends TutorialScreen
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
            "tutorial" => $this->tutorial
        ];
    }

    public function permission(): ?iterable
    {
        return [
            "platform.websites.tutorials"
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
            $this->getOrchidComponent()->buttonEdit(),
            $this->getOrchidComponent()->buttonDelete($this->tutorial->id)
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
                ->title("Tutorial")
                ->description("Silahkan masukan data tutorial")
        ];
    }

    public function edit(TutorialEditRequest $request,Tutorial $tutorial){

        $this->getTutorialService()->edit($request,$tutorial);

        $this->getOrchidComponent()->toastSukses("Edit","Tutorial");

    }

    public function remove(Tutorial $tutorial){

        $this->getTutorialService()->delete($tutorial);

        $this->getOrchidComponent()->toastSukses("Edit","Tutorial");
        return redirect()->route("platform.websites.tutorials");
    }
}
