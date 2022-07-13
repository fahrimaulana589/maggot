<?php

namespace App\Package\pengunjung\Orchid\Screens;


use App\Helper\Orchid\OrchidComponent;
use App\Package\pengunjung\Model\Pengunjung;
use App\Package\pengunjung\Orchid\Layouts\PengunjungListLayout;
use App\Package\pengunjung\service\PengunjungService;
use Orchid\Screen\Screen;

class PengunjungListScreen extends Screen
{
    public $permission = "platform.websites.pengunjungs";
    public OrchidComponent $orchidComponet;
    public PengunjungService $pageService;

    /**
     * @param OrchidComponent $orchidComponet
     * @param PengunjungService $pageService
     */
    public function __construct(OrchidComponent $orchidComponet, PengunjungService $pageService)
    {
        $this->orchidComponet = $orchidComponet;
        $this->pageService = $pageService;
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "pengunjungs" => Pengunjung::all()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Daftar Pengunjung';
    }

    public function commandBar()
    {
        return [
            $this->orchidComponet->linkAdd()
                ->route("platform.pengunjung.add")
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
            PengunjungListLayout::class
        ];
    }

    public function remove(Pengunjung $pengunjung)
    {
        $pengunjung->delete();

        $this->orchidComponet->toastSukses("Hapus","Pengunjung");
    }

}
