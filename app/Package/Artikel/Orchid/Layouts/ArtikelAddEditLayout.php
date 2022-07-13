<?php

namespace App\Package\Artikel\Orchid\Layouts;

use App\Helper\Orchid\OrchidRow;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class ArtikelAddEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;
    public OrchidRow $orchidRow;

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
            $this->orchidRow->rowText("artikel.title","Judul"),
        ];
    }
}
