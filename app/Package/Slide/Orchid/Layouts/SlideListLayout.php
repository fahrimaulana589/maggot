<?php

namespace App\Package\Slide\Orchid\Layouts;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use App\Package\Slide\service\SlideService;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SlideListLayout extends Table
{
    public OrchidTable $orchidTable;
    public OrchidComponent $orchidComponent;

    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'slides';

    /**
     * @param OrchidTable $orchidTable
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
        return [
            $this->orchidTable->tableImage("slide.image","Gambar"),
            $this->orchidTable->tableLink("slide.url","alamat")
                ->render(function ($value){
                    $url = $value["url"];
                    return $this->orchidComponent->linkTo("$url")
                        ->href($url);
                }),
            $this->orchidTable->tableAction(
                function ($data) {
                    return [
                        $this->orchidComponent->linkEdit()
                            ->route("platform.websites.slides.edit",$data["id"]),
                        $this->orchidComponent->buttonDelete($data["id"])
                    ];
                }
            )
        ];
    }
}
