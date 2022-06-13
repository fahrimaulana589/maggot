<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string("url");
            $table->string("image");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('slides');
    }
};
