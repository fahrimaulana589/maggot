<?php

namespace App\Package\Menu\Orchid\Layouts;

use App\Helper\Orchid\OrchidRow;
use App\Helper\Orchid\OrchidTable;
use App\Package\Menu\Model\Menu;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class MenuAddEditLayout extends Rows
{
    public OrchidRow $orchidRow;
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * @param OrchidTable $orchidTable
     */
    public function __construct(OrchidRow $orchidRow)
    {
        $this->orchidRow = $orchidRow;
    }

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            $this->orchidRow->rowText("title","Nama"),
            $this->orchidRow->rowText("url","ALamat"),
            $this->orchidRow->rowNumber("posision","Posisi"),
        ];
    }
}
