<?php

namespace App\Package\Artikel\Orchid\Layouts;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ArtikelListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'artikels';
    public OrchidTable $orchidTable;

    /**
     * @param OrchidComponent $orchidComponetn
     */
    public function __construct(OrchidTable $orchidTable,OrchidComponent $orchidComponent)
    {
        $this->orchidComponent = $orchidComponent;
        $this->orchidTable = $orchidTable;
    }

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return array(
            $this->orchidTable->tableImage("image","Gambar"),
            $this->orchidTable->tableText("title","Judul"),
            $this->orchidTable->tableAction(
                function ($data) {
                    return [
                        $this->orchidComponent->linkEdit()
                            ->route("platform.websites.artikels.edit",$data["id"]),
                        $this->orchidComponent->buttonDelete($data["id"])
                    ];
                }
            )
        );
    }
}
