<?php

namespace App\Package\Base\Orchid\Layouts;

use App\Helper\Orchid\OrchidRow;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class OrchidRowsLayout extends Rows
{
    public OrchidRow $orchidRow;

    /**
     * @return OrchidRow
     */
    public function getOrchidRow(): OrchidRow
    {
        return app()->make(OrchidRow::class);
    }

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [];
    }
}
