<?php

namespace App\Package\pengunjung\Orchid\Layouts;

use App\Helper\Orchid\OrchidRow;
use App\Package\base\Orchid\Layouts\AdminBaseRow;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class PengunjungAddEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;
    public OrchidRow $orchidRow;

    public function __construct(OrchidRow $orchidRow)
    {
        $this->orchidRow = $orchidRow;

    }

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            $this->orchidRow->rowText("pengunjung.name", "Nama"),
            $this->orchidRow->rowText("pengunjung.email", "Email"),
            $this->orchidRow->rowText("pengunjung.password", "Password"),
            $this->orchidRow->rowOption("pengunjung.level", "Level")
                ->options([
                    "pengunjung" => "pengunjung",
                    "admin" => "admin",
                ])
        ];
    }
}
