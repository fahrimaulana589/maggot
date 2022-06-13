<?php

namespace App\Package\Page\database\seeders;

use App\Package\Page\Model\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sejarah = new Page();
        $sejarah->title = "sejarah";
        $sejarah->content = "sejarah";
        $sejarah->image = "//127.0.0.1:8000";
        $sejarah->slug = Str::slug($sejarah->title);
        $sejarah->save();

        $profile = new Page();
        $profile->title = "profile";
        $profile->content = "profile";
        $profile->image = "//127.0.0.1:8000";
        $profile->slug = Str::slug($profile->title);
        $profile->save();

        $visi_misi = new Page();
        $visi_misi->title = "visi_misi";
        $visi_misi->content = "visi_misi";
        $visi_misi->image = "//127.0.0.1:8000";
        $visi_misi->slug = Str::slug($visi_misi->title);
        $visi_misi->save();

    }
}
