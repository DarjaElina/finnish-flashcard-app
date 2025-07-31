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
        Schema::create('shared_words', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('finnish')->index();
            $table->string('english');
            $table->text('example')->nullable();
            $table->text('category')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shared_words');
    }
};
