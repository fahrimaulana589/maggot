<?php

namespace App\Package\Artikel\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Package\Artikel\Http\Requests\ArtikelAddRequest;
use App\Package\Artikel\Orchid\Layouts\ArtikelAddEditLayout;
use App\Package\Artikel\service\ArtikelService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ArtikelAddScreen extends Screen
{
    public $permission = "platform.websites.artikels";
    public OrchidComponent $orchidComponent;
    public OrchidRow $orchidRow;
    public ArtikelService $artikelService;

    /**
     * @param OrchidComponent $orchidComponent
     * @param OrchidRow $orchidRow
     * @param ArtikelService $artikelService
     */
    public function __construct(OrchidComponent $orchidComponent, OrchidRow $orchidRow, ArtikelService $artikelService)
    {
        $this->orchidComponent = $orchidComponent;
        $this->orchidRow = $orchidRow;
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

        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Tambah Artikel';
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
                ->route("platform.websites.pages"),
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
            Layout::block(ArtikelAddEditLayout::class)
                ->title("Artikel")
                ->description(
                    "Silahkan masukan data data berikut untuk membuta artikel baru"
                ),
            Layout::rows([
                $this->orchidRow->rowImage("artikel.image","Gambar"),
            ]),
            Layout::rows([
                $this->orchidRow->rowContent("artikel.content","Content"),
            ]),

        ];
    }

    public function save(ArtikelAddRequest $request){

        $this->artikelService->create($request);

        $this->orchidComponent->toastSukses("Tambah","Artikel");

        return redirect()->route("platform.websites.artikels");

    }
}
