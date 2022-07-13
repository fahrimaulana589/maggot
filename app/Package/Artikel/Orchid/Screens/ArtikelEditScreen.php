<?php

namespace App\Package\Artikel\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Package\Artikel\Http\Requests\ArtikelEditRequest;
use App\Package\Artikel\Model\Artikel;
use App\Package\Artikel\Orchid\Layouts\ArtikelAddEditLayout;
use App\Package\Artikel\service\ArtikelService;
use App\Package\Page\Http\Requests\PageEditRequest;
use App\Package\Page\Model\Page;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ArtikelEditScreen extends Screen
{
    public $permission = "platform.websites.artikels";
    public OrchidComponent $orchidComponent;
    public OrchidRow $orchidRow;
    public ArtikelService $artikelService;
    public $artikel;

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
    public function query(Artikel $artikel): iterable
    {
        $this->artikel = $artikel;
        return [
            "artikel" => $artikel
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return "Edit artikel id : {$this->artikel->id}";    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponent->linkBack()
                ->route("platform.websites.artikels"),
            $this->orchidComponent->buttonEdit(),
            $this->orchidComponent->buttonDelete($this->artikel->id)
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

    public function edit(ArtikelEditRequest $request,Artikel $artikel){

        $this->artikelService->edit($request,$artikel);

        $this->orchidComponent->toastSukses("Edit","Artikel");
    }

    public function remove(Artikel $artikel){

        $this->artikelService->delete($artikel);

        $this->orchidComponent->toastSukses("Hapus","Artikel");

        return redirect()->route("platform.websites.artikels");
    }
}
