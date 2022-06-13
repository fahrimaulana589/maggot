<?php

namespace App\Package\Base\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
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
