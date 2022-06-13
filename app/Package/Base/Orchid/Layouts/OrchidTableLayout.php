<?php

namespace App\Package\Base\Orchid\Layouts;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidTable;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class OrchidTableLayout extends Table
{
    /**
     * @return OrchidTable
     */
    public function getOrchidTable(): OrchidTable
    {
        return app()->make(OrchidTable::class);
    }

    public function getOrchidComponent() : OrchidComponent{

        return app()->make(OrchidComponent::class);
    }

    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = '';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [];
    }
}
