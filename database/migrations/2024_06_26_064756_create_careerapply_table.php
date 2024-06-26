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
        Schema::create('careerapply', function (Blueprint $table) {
            $table->id('career_apply');
            $table->unsignedBigInteger('career_id');
            $table->string('name', 60);
            $table->string('email', 100);
            $table->string('mobile', 20);
            $table->string('experience', 10);
            $table->string('status', 60);
            $table->string('doc', 60);
            $table->string('message', 255);
            $table->timestamps();

            $table->foreign('career_id')->references('career_id')->on('career')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careerapply');
    }
};
