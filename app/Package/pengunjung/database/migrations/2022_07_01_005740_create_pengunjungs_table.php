<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();

            $table->string("name")->unique();
            $table->string("password");
            $table->string("email")->unique();
            $table->string("token")->unique();
            $table->string("level");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengunjungs');
    }
};
