<?php

namespace App\Package\Page\Orchid\Layouts;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PageListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'pages';
    public OrchidTable $orchidTable;
    private OrchidComponent $orchidComponent;

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
            $this->orchidTable->tableText("slug","Link"),
            $this->orchidTable->tableAction(
                function ($data) {
                    return [
                        $this->orchidComponent->linkEdit()
                            ->route("platform.websites.pages.edit",$data["id"]),
                        $this->orchidComponent->buttonDelete($data["id"])
                    ];
                }
            )
        );
    }
}
