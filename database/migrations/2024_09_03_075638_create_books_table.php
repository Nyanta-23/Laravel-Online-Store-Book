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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('synopsis');
            $table->double('price');
            $table->integer('stock');
            $table->text('image')->nullable();
            $table->foreignId('author_id')->constrained(
                table: 'authors',
                indexName: 'books_author_id',
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'books_category_id'
            );
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
