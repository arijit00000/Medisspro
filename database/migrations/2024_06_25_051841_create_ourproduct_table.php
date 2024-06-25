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
        Schema::create('ourproduct', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_img1', 60);
            $table->string('product_img2', 60);
            $table->string('product_name', 60);
            $table->string('product_details', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourproduct');
    }
};
