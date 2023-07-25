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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type');
            $table->boolean('status')->default(1);
            $table->string('image')->nullable();
            $table->string('original_image')->nullable();
            $table->unsignedInteger('sort')->nullable();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('page_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
