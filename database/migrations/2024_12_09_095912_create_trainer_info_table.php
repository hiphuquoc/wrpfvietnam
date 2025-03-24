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
        Schema::create('trainer_info', function (Blueprint $table) {
            $table->id();
            $table->integer('seo_id');
            $table->boolean('sex')->default(0)->nullable(); /* 1 là nam, 0 là nữ */
            $table->text('birth_day');
            $table->text('phone');
            $table->text('email');
            $table->text('start_pwl')->nullable();
            $table->text('class_id');
            $table->text('team')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        // Schema::dropIfExists('trainer_info');
    }
};
