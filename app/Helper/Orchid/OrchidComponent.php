<?php

namespace App\Helper\Orchid;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;
use PhpParser\Node\Scalar\String_;

class OrchidComponent
{

    public function linkAdd() : Link{

        return Link::make(__("Tambah"))
            ->icon("plus")
            ->type(Color::PRIMARY());
    }

    public function linkBack() : Link{

        return Link::make(__("Kembali"))
            ->icon("action-undo")
            ->type(Color::WARNING());
    }

    public function linkTo(string $name) : Link
    {
        return Link::make(__($name))
            ->icon("action-redo");
    }

    public function linkEdit(): Link
    {
        return Link::make(__("Edit"))
            ->icon("pencil")
            ->type(Color::SUCCESS());
    }

    public function buttonSave($id = null) : Button{

        return Button::make(__("Simpan"))
            ->icon("save")
            ->type(Color::PRIMARY())
            ->method("save",[$id]);
    }

    public function buttonEdit() : Button
    {

        return Button::make(__("Edit"))
            ->icon("pencil")
            ->type(Color::SUCCESS())
            ->method("edit");
    }

    public function buttonDelete(int $id,array $ids = []) : Button{
        $data = array_merge([$id],$ids);

        return Button::make(__("Hapus"))
            ->icon("trash")
            ->type(Color::DANGER())
            ->confirm("Apakah anda yakin akan menghapus ini?")
            ->method("remove",$data);
    }

    public function toastSukses(String $action,String $name) : \Orchid\Alert\Toast{

        return Toast::success("Sukses $action $name");
    }

    public function linkShow()
    {
        return Link::make(__("Tampilkan"))
            ->icon("monitor")
            ->type(Color::PRIMARY());
    }


}
