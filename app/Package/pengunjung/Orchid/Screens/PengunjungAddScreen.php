<?php

namespace App\Package\pengunjung\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\pengunjung\Http\Requests\PengunjungAddRequest;
use App\Package\pengunjung\Model\Pengunjung;
use App\Package\pengunjung\Orchid\Layouts\PengunjungAddEditLayout;
use App\Package\pengunjung\service\PengunjungService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PengunjungAddScreen extends Screen
{
    public $permission = "platform.websites.pengunjungs";
    public OrchidComponent $orchidComponent;
    public PengunjungService $pengunjungService;

    /**
     * @param OrchidComponent $orchidComponet
     * @param PengunjungService $pengunjungService
     */
    public function __construct(OrchidComponent $orchidComponent, PengunjungService $pengunjungService)
    {
        $this->orchidComponent = $orchidComponent;
        $this->pengunjungService = $pengunjungService;
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
        return 'Tambah Pengunjung';
    }

    public function commandBar()
    {
        return [
            $this->orchidComponent->linkBack()
                ->route("platform.pengunjung"),
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
            Layout::block(PengunjungAddEditLayout::class)
                ->title("Pengunjung")
        ];
    }

    public function save(PengunjungAddRequest $request)
    {

        $this->pengunjungService->create($request);

        $this->orchidComponent->toastSukses("Tambah","Pengunjung");

        return redirect()->route("platform.pengunjung");

    }


}
