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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->unsignedBigInteger('book_id');
            $table->boolean('is_return')->default(false);
            $table->timestamps();
            $table->foreign('loan_id')->references('id')
                ->on('loans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('book_id')->references('id')
                ->on('books')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_details', function (Blueprint $table) {
            $table->dropForeign(['book_id','loan_id']);
        });
        Schema::dropIfExists('loan_details');
    }
};
