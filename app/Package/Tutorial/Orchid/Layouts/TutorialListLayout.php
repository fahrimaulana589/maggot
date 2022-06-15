<?php

namespace App\Package\Tutorial\Orchid\Layouts;

use App\Helper\Orchid\OrchidTable;
use App\Package\Base\Orchid\Layouts\OrchidTableLayout;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TutorialListLayout extends OrchidTableLayout
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'tutorials';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            $this->getOrchidTable()->tableImage("image","Gambar"),
            $this->getOrchidTable()->tableText("title","Judul"),
            $this->getOrchidTable()->tableContent("description","Deskripsi"),
            $this->getOrchidTable()->tableAction(function ($data){
                return [
                    $this->getOrchidComponent()->linkShow()
                        ->route("platform.websites.tutorials.show",[$data->id]),
                    $this->getOrchidComponent()->linkEdit()
                        ->route("platform.websites.tutorials.edit",[$data->id]),
                    $this->getOrchidComponent()->buttonDelete($data->id)
                ];
            })
        ];
    }
}
