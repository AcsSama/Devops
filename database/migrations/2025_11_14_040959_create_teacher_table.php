<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_teacher', function (Blueprint $table) {
            $table->id();
            $table->integer('teaid');
            $table->string('teaname');
            $table->string('major');
            $table->string('telephone');
            $table->string('teaimg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_teacher');
    }
};
