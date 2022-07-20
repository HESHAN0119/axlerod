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
        Schema::create('garage_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('garage_name')->nullable();
            $table->string('garage_mobno')->nullable();
            $table->string('garage_email')->nullable();
            $table->string('location')->nullable();
            $table->double('longtitude')->nullable();
            $table->double('latitude')->nullable();
            $table->text('bio')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('garage_profiles');
    }
};
