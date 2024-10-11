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
        Schema::create('thesis_categories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('name_kh')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('create_by_user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thesis_categories');
    }
};
