<?php

namespace App\Package\Tutorial\Orchid\Layouts;

use App\Package\Base\Orchid\Layouts\OrchidRowsLayout;
use Orchid\Screen\Field;

class TutorialAddEditLayout extends OrchidRowsLayout
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
            $this->getOrchidRow()->rowText("tutorial.title","Judul"),
            $this->getOrchidRow()->rowImage("tutorial.image","Gambar"),
        ];
    }
}
