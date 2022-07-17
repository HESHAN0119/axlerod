<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->foreignId('vehicle_type_id')->nullable();
            $table->foreignId('post_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->text("problem");
            $table->string("garage")->nullable();
            $table->text("feedback")->nullable();
            $table->text("image_url")->nullable();
            $table->integer("views")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
