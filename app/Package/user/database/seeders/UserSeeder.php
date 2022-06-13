<?php

namespace App\Package\user\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
        [
            "name"=>'admin',
            "email"=>'admin@admin.com',
            "password"=>'$2y$10$pc1lBwlgvUbBGcZ.Efw00./PFPJt.oTR4DpTMNPrVGR.sU9jnaPNS',
            "permissions"=>'{"platform.systems.roles":true,"platform.systems.users":true,"platform.systems.dashboard":true,"platform.systems.attachment":true,"platform.websites.profiles":true,"platform.websites.menus":true,"platform.websites.pages":true,"platform.websites.slides":true,"platform.index":true}',
            'updated_at' =>'2022-06-02 02:00:30',
            'created_at'=>'2022-06-02 02:00:30',
            ];
        DB::table("users")->insert($user);
    }
}
