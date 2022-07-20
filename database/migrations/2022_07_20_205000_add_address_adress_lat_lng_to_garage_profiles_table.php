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
        Schema::table('garage_profiles', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->double('address_lng')->nullable();
            $table->double('address_lat')->nullable();
            $table->integer('views')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('garage_profiles', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('address_lng');
            $table->dropColumn('address_lat');
            $table->dropColumn('views');
        });
    }
};
