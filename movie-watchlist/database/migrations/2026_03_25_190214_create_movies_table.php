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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('genre')->index();
            $table->text('description')->nullable();
            $table->text('overview')->nullable();
            $table->unsignedSmallInteger('release_year');
            $table->decimal('rating', 4, 1);
            $table->integer('total_reviews')->default(0);
            $table->boolean('watched')->default(false);
            $table->string('img_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
