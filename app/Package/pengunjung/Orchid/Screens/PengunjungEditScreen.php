<?php

namespace App\Package\pengunjung\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Package\pengunjung\Http\Requests\PengunjungEditRequest;
use App\Package\pengunjung\Orchid\Layouts\PengunjungAddEditLayout;
use App\Package\pengunjung\Model\Pengunjung;
use App\Package\pengunjung\service\PengunjungService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PengunjungEditScreen extends Screen
{
    public $permission = "platform.websites.pengunjungs";
    public Pengunjung $pengunjung;
    public OrchidComponent $orchidComponent;
    public OrchidRow $orchidRow;
    public PengunjungService $pengunjungService;

    /**
     * @param OrchidComponent $orchidComponent
     */
    public function __construct(OrchidComponent $orchidComponent,OrchidRow $orchidRow,PengunjungService $pengunjungService)
    {
        $this->pengunjungService = $pengunjungService;
        $this->orchidRow = $orchidRow;
        $this->orchidComponent = $orchidComponent;
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Pengunjung $pengunjung): iterable
    {
        return [
            "pengunjung" => $pengunjung
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Edit Pengunjung';
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
                ->route("platform.pengunjung"),
            $this->orchidComponent->buttonEdit(),
            $this->orchidComponent->buttonDelete($this->pengunjung->id)
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

    public function edit(PengunjungEditRequest $request,Pengunjung $pengunjung){

        $this->pengunjungService->edit($request,$pengunjung);

        $this->orchidComponent->toastSukses("Edit","Pengunjung");
    }

    public function remove(Pengunjung $pengunjung){

        $this->pengunjungService->delete($pengunjung);

        $this->orchidComponent->toastSukses("Hapus","Pengunjung");

        return redirect()->route("platform.pengunjung");
    }
}
