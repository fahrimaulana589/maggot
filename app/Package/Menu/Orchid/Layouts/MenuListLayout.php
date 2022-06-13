<?php

namespace App\Package\Menu\Orchid\Layouts;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class MenuListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'menus';
    public OrchidTable $orchidTable;
    public OrchidComponent $orchidComponent;

    /**
     * @param string $target
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
            $this->orchidTable->tableText("title","Judul"),
            $this->orchidTable->tableLink("url","Link")
                ->render(function ($value){
                    $url = $value["url"];
                    return $this->orchidComponent->linkTo("$url")
                        ->href($url);
                }),
            $this->orchidTable->tableText("posision","Posisi"),
            $this->orchidTable->tableText("subMenu","Sub menu")
                ->render(function ($value){
                    if($value->subMenu == null){
                        return "";
                    }
                    return $value->subMenu->title;
                }),
            $this->orchidTable->tableAction(function ($value){
                return [
                    $this->orchidComponent->linkEdit()
                        ->route("platform.websites.menus.edit",$value["id"]),
                    $this->orchidComponent->buttonDelete($value['id'])
                ];
            })
        ];
    }
}
