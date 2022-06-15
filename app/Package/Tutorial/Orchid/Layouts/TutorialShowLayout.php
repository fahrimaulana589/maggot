<?php

namespace App\Package\Tutorial\Orchid\Layouts;

use App\Package\Base\Orchid\Layouts\OrchidTableLayout;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TutorialShowLayout extends OrchidTableLayout
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'steps';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            $this->getOrchidTable()->tableText("title","Judul"),
            $this->getOrchidTable()->tableContent("description","Deskripsi"),
            $this->getOrchidTable()->tableAction(function ($value){
                return [
                    $this->getOrchidComponent()->linkEdit()
                        ->route("platform.websites.tutorials.steps.edit",[$value->id_tutorial,$value->id]),
                    $this->getOrchidComponent()->buttonDelete($value->id)
                ];
            })
        ];
    }
}
