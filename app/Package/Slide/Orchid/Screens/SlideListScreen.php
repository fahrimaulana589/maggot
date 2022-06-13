<?php

namespace App\Package\Slide\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use App\Package\Slide\Model\Slide;
use App\Package\Slide\Orchid\Layouts\SlideListLayout;
use App\Package\Slide\service\SlideService;
use Orchid\Screen\Screen;

class SlideListScreen extends Screen
{
    public $permission = "platform.websites.slides";
    public OrchidComponent $orchidComponent;
    public OrchidTable $orchidTable;
    public SlideService $slideService;

    /**
     * @param OrchidComponent $orchidComponent
     * @param OrchidTable $orchidTable
     * @param SlideService $slideService
     */
    public function __construct(OrchidComponent $orchidComponent, OrchidTable $orchidTable,SlideService $slideService)
    {
        $this->orchidComponent = $orchidComponent;
        $this->orchidTable = $orchidTable;
        $this->slideService = $slideService;
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $slides = $this->slideService->getAll();

        return [
            "slides" => $slides,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Daftar Slide';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponent->linkAdd()
                ->route("platform.websites.slides.add")
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
            SlideListLayout::class
        ];
    }

    public function remove(Slide $slide){

        $this->slideService->delete($slide);

        $this->orchidComponent->toastSukses("Hapus","Slide");
    }
}
