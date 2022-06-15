<?php

namespace App\Package\Base\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Helper\Orchid\OrchidTable;
use App\Package\Tutorial\Model\Tutorial;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Screen;

class OrchidScreen extends Screen
{
    /**
     * @return OrchidComponent
     */
    public function getOrchidComponent(): OrchidComponent
    {
        return app()->make(OrchidComponent::class);
    }

    public function getOrchidRow(): OrchidRow
    {
        return app()->make(OrchidRow::class);
    }

    public function getOrchidTable() : OrchidTable{

        return  app()->make(OrchidTable::class);
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'OrchidScreen';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [];
    }

}
