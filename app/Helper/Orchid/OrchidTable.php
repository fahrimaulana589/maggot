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

    public function tableText(string $name, string $title): TD
    {

        return TD::make($name, $title)
            ->sort()
            ->filter(
                Input::class
            );

    }

    public function tableLink(string $name, string $title): TD
    {

        return TD::make($name, $title)
            ->sort()
            ->filter(
                Input::class
            );

    }

    public function tableAction(Closure $param): TD
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

    public function tableImage(string $name, string $title): TD
    {

        return TD::make($name, $title)
            ->sort()
            ->filter(
                Input::class
            )
            ->render(
                function ($value) {
                    return view("base::imageOrchid", ["value" => $value]);
                }
            );

    }

    public function tableVideo(string $name, string $title): TD
    {

        return TD::make($name, $title)
            ->sort()
            ->filter(
                Input::class
            )
            ->render(
                function ($value) {
                    dd($value);
                    return view("base::videoOrchid", ["value" => $value]);
                }
            );
    }

    public function tableContent(string $name, string $title)
    {

        return TD::make($name, $title)
            ->sort()
            ->filter(
                Input::class
            )
            ->render(
                function ($value) {
                    return view("base::contentOrchid", ["value" => $value]);
                }
            );
    }
}
