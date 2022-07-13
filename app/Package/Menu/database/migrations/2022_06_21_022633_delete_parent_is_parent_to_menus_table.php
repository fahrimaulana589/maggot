<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn("is_parent");
            $table->dropColumn("parent");
        });
    }

    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->boolean("is_parent");
            $table->foreignId("parent")->nullable();
        });
    }
};
