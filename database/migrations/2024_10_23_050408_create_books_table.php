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
            $table->string('title');
            $table->string('author');
            $table->string('years');
            $table->string('publisher');
            $table->string('city');
            $table->string('cover');
            $table->unsignedBigInteger('bookshelf_id');
            $table->timestamps();

            $table->foreign('bookshelf_id')->references('id')->on('bookshelfs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        schema::table('book',function (Blueprint $table) {
            $table->dropConstrainedForeignId('bookshelfs_id');
        });
        Schema::dropIfExists('books');
    }
};
