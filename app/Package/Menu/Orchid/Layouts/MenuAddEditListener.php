<?php

namespace App\Package\Menu\Orchid\Layouts;

use App\Helper\Orchid\OrchidRow;
use App\Package\Menu\Model\Menu;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Listener;
use Orchid\Support\Facades\Layout;

class MenuAddEditListener extends Listener
{
    public OrchidRow $orchidRow;

    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = [
        'is_parent',
    ];

    /**
     * What screen method should be called
     * as a source for an asynchronous request.
     *
     * The name of the method must
     * begin with the prefix "async"
     *
     * @var string
     */
    protected $asyncMethod = 'asyncSum';

    /**
     * @param OrchidRow $orchidRow
     */
    public function __construct(OrchidRow $orchidRow)
    {
        $this->orchidRow = $orchidRow;
    }

    /**
     * @return Layout[]
     */
    protected function layouts(): array
    {
        return [
            Layout::rows([
                $this->orchidRow->rowBoolean("is_parent","Menu utama"),
                $this->orchidRow->rowRelasi("parent","Sub menu",Menu::class,"active")
                    ->canSee(!session("is_parent",0)),
            ])
        ];
    }
}
