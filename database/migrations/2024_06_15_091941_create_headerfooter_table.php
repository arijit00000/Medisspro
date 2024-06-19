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
        Schema::create('headerfooter', function (Blueprint $table) {
            $table->id('headerfooter_id');
            $table->string('mobile', 20);
            $table->string('email', 50);
            $table->string('corporate_office', 20);
            $table->json('branch_office')->nullable();
            $table->string('web', 255);
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkdin')->nullable();
            $table->text('twitter')->nullable();
            $table->text('footer_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headerfooter');
    }
};
