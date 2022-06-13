<?php

namespace App\Package\Slide\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Slide\Http\Requsets\SlideEditRequest;
use App\Package\Slide\Model\Slide;
use App\Package\Slide\Orchid\Layouts\SlideAddEditLayout;
use App\Package\Slide\service\SlideService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class SlideEditScreen extends Screen
{
    public $permission = "platform.websites.slides";
    public Slide $slide;
    public OrchidComponent $orchidComponent;
    public SlideService $slideService;

    /**
     * @param OrchidComponent $orchidComponent
     */
    public function __construct(OrchidComponent $orchidComponent,SlideService $slideService)
    {
        $this->slideService = $slideService;
        $this->orchidComponent = $orchidComponent;
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Slide $slide): iterable
    {
        $this->slide = $slide;

        return [
            "slide" => $this->slide
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return "Slide id : {$this->slide->id}";
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponent->linkBack()
                ->route("platform.websites.slides"),
            $this->orchidComponent->buttonEdit(),
            $this->orchidComponent->buttonDelete($this->slide->id)
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
            Layout::block(SlideAddEditLayout::class)
                ->title("Slide")
                ->description("masukam data slide"),
        ];
    }

    public function edit(SlideEditRequest $request,Slide $page){

        $this->slideService->edit($request,$page);

        $this->orchidComponent->toastSukses("Edit","Page");
    }

    public function remove(Slide $page){

        $this->slideService->delete($page);

        $this->orchidComponent->toastSukses("Hapus","Page");

        return redirect()->route("platform.websites.slides");
    }
}
