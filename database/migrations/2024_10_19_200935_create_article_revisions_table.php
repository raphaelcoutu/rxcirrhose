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
        Schema::create('article_revisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_translation_id')->constrained();
            $table->date('revision_date');
            $table->string('author');
            $table->text('content');
            $table->boolean('hidden')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_revisions');
    }
};
