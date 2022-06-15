<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Tutorial\Http\Requests\StepAddRequest;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\Orchid\Layouts\StepAddEditLayout;
use Orchid\Support\Facades\Layout;

class StepAddScreen extends TutorialScreen
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
                ->route("platform.websites.tutorials.show", $this->tutorial->id),
            $this->getOrchidComponent()->buttonSave()
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
            Layout::block(StepAddEditLayout::class)
                ->title("Step")
                ->description("Masukan Data"),
            Layout::rows([
                $this->getOrchidRow()->rowContent("step.description", "Deskripsi"),
            ])
        ];
    }

    public function save(StepAddRequest $request, Tutorial $tutorial)
    {
        $this->getTutorialService()->createStep($request, $tutorial);

        $this->getOrchidComponent()->toastSukses("Simpan","Step");

        return redirect()->route("platform.websites.tutorials.show",$tutorial->id);
    }
}
