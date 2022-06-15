<?php

namespace App\Helper\Orchid;

use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;

class OrchidRow
{

    public function rowText(String $nama,String $title) : Input{

        return Input::make($nama,)
            ->title($title)
            ->type("text")
            ->placeholder("Masukan $title");
    }

    public function rowContent(string $name, string $title) : Quill
    {

        return Quill::make($name)
            ->title($title);
    }

    public function rowImage(string $name, string $title) : Picture
    {
        return Picture::make($name)
            ->title($title);
    }

    public function rowNumber(string $name, string $title) : Input
    {
        return Input::make($name)
            ->title($title)
            ->type("number")
            ->placeholder("Masukan $title");
    }

    public function rowRelasi(string $name, string $title, string $class, string $scope) : Relation
    {
        return Relation::make($name)
            ->fromModel($class, 'title','id')
            ->applyScope($scope)
            ->title($title);
    }

    public function rowBoolean(string $name, string $title)
    {

        $val = session("is_parent",0);
        return CheckBox::make($name)
            ->value($val)
            ->title($title)
            ->placeholder("Aktive");
    }

    public function rowTextArean(string $name, string $title)
    {

        return TextArea::make($name)
            ->rows(7)
            ->title($title);
    }


    public function rowVideo(string $name, string $title)
    {
        return Upload::make($name)
            ->title($title)
            ->maxFiles(1)
            ->acceptedFiles("video/mp4")
            ->maxFileSize(300);
    }
}
