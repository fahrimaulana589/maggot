<?php

namespace App\Package\Tutorial\Orchid\Layouts;

use App\Package\Base\Orchid\Layouts\OrchidRowsLayout;
use App\Package\Base\Orchid\Layouts\OrchidTableLayout;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class StepAddEditLayout extends OrchidRowsLayout
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            $this->getOrchidRow()->rowText("step.title","Judul"),
            $this->getOrchidRow()->rowText("step.video","Video"),
        ];
    }
}
