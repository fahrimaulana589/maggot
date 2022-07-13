<?php

namespace App\Package\Artikel\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Package\Artikel\Model\Artikel;
use App\Package\Artikel\Orchid\Layouts\ArtikelListLayout;
use App\Package\Artikel\service\ArtikelService;
use Orchid\Screen\Screen;

class ArtikelListScreen extends Screen
{
    public $permission = "platform.websites.artikels";
    public OrchidComponent $orchidComponent;
    public ArtikelService $artikelService;

    /**
     * @param OrchidComponent $orchidComponent
     * @param ArtikelService $artikelService
     */
    public function __construct(OrchidComponent $orchidComponent, ArtikelService $artikelService)
    {
        $this->orchidComponent = $orchidComponent;
        $this->artikelService = $artikelService;
    }


    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "artikels" => $this->artikelService->getAll()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Daftar Artikel';
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
                ->route("platform.websites.artikels.add")
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
            ArtikelListLayout::class
        ];
    }

    public function remove(Artikel $artikel){
        $this->artikelService->delete($artikel);

        $this->orchidComponent->toastSukses("Hapus","Artikel");

    }
}
