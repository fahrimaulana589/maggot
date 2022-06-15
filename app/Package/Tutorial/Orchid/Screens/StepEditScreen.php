<?php

namespace App\Package\Tutorial\Orchid\Screens;

use App\Package\Tutorial\Http\Requests\StepEditRequest;
use App\Package\Tutorial\Model\Step;
use App\Package\Tutorial\Model\Tutorial;
use App\Package\Tutorial\Orchid\Layouts\StepAddEditLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class StepEditScreen extends TutorialScreen
{
    public Tutorial $tutorial;
    public Step $step;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Tutorial $tutorial,Step $step): iterable
    {
        $tutorial->steps()->findOrFail($step->id);

        $this->tutorial = $tutorial;
        $this->step = $step;

        return [
            "step" => $this->step
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
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
                ->route("platform.websites.tutorials.show",$this->tutorial->id),
            $this->getOrchidComponent()->buttonEdit(),
            $this->getOrchidComponent()->buttonDelete($this->step->id,[$this->tutorial->id])
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
            Layout::view("base::videoOrchid", ["value" => $this->step]),
            Layout::rows([
                $this->getOrchidRow()->rowContent("step.description", "Deskripsi"),
            ])
        ];
    }

    public function edit(StepEditRequest $request,Tutorial $tutorial,Step $step){

        $this->getTutorialService()->editStep($request,$step);

        $this->getOrchidComponent()->toastSukses("Edit","Step");
    }

    public function remove(Tutorial $tutorial,Step $step){

        $this->getTutorialService()->deleteStep($step);

        $this->getOrchidComponent()->toastSukses("Hapus","Step");

        return redirect()->route("platform.websites.tutorials.show",$tutorial->id);
    }
}
