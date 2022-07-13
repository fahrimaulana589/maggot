<?php

namespace App\Package\pengunjung\Orchid\Layouts;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use App\Package\base\Orchid\Layouts\AdminBaseTable;
use App\Package\base\Orchid\Screens\AdminBaseListScreen;
use App\Package\pengunjung\service\PengunjungService;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PengunjungListLayout extends Table
{
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
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'pengunjungs';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            $this->orchidTable->tableText("name","Nama"),
            $this->orchidTable->tableText("email","Email"),
            $this->orchidTable->tableAction(
                function ($data) {
                    return [
                        $this->orchidComponent->linkEdit()
                            ->route("platform.pengunjung.edit",$data["id"]),
                        $this->orchidComponent->buttonDelete($data["id"])
                    ];
                }
            )
        ];
    }
}
