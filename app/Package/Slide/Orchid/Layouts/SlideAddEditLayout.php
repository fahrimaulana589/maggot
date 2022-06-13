<?php

namespace App\Package\Slide\Orchid\Layouts;

use App\Helper\Orchid\OrchidRow;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class SlideAddEditLayout extends Rows
{
    public OrchidRow $orchidRow;
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * @param OrchidRow $orchidRow
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
            $this->orchidRow->rowImage("slide.image","Gambar"),
            $this->orchidRow->rowText("slide.url","Alamat")
        ];
    }
}
