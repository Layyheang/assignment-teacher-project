<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('tid');
            $table->string('full_name');
            $table->enum('gender', ['male', 'female']);
            $table->string('degree');
            $table->string('tel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
    