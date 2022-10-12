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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp')->nullable();
            $table->string('ins')->nullable();
            $table->LongText('twitter')->nullable();
            $table->LongText('facebook')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('fvicon')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
