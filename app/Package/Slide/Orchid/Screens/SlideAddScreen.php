<?php

namespace App\Package\Slide\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Slide\Http\Requsets\SlideAddRequest;
use App\Package\Slide\Orchid\Layouts\SlideAddEditLayout;
use App\Package\Slide\service\SlideService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class SlideAddScreen extends Screen
{
    public $permission = "platform.websites.slides";
    public OrchidComponent $orchidComponent;
    public SlideService $slideService;

    /**
     * @param OrchidComponent $orchidComponent
     * @param SlideService $slideService
     */
    public function __construct(OrchidComponent $orchidComponent, SlideService $slideService)
    {
        $this->orchidComponent = $orchidComponent;
        $this->slideService = $slideService;
    }

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
        return 'Buat Slide';
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
            $this->orchidComponent->buttonSave()
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

    public function save(SlideAddRequest $request){

        $this->slideService->create($request);

        $this->orchidComponent->toastSukses("Tambah","Slide");

        return redirect()->route("platform.websites.slides");
    }
}
