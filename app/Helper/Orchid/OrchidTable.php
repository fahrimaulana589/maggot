<?php

namespace App\Helper\Orchid;

use App\Facades\OrchidHelper;
use Closure;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class OrchidTable
{

    public function tableText(String $name, String $title): TD{

        return TD::make($name,$title)
            ->sort()
            ->filter(
                Input::class
            );

    }

    public function tableLink(String $name, String $title) : TD{

        return TD::make($name,$title)
            ->sort()
            ->filter(
                Input::class
            );

    }

    public function tableAction(Closure $param) : TD
    {

        return TD::make(__('Actions'),)
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(function ($data) use ($param) {
                return DropDown::make()
                    ->icon('options-vertical')
                    ->list($param($data));
            });
    }

    public function tableImage(String $name, String $title) : TD
    {

        return TD::make($name,$title)
            ->sort()
            ->filter(
                Input::class
            )
            ->render(
                function ($value){
                    return view("base::imageOrchid",["value" => $value]);
                }
            );

    }
}
