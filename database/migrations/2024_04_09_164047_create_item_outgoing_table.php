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
        Schema::create('item_outgoing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('reason_id');
            $table->unsignedBigInteger('marketplace_id');
            $table->foreign('item_id')->references('id')->on('item')
            ->onDelete('cascade');
            $table->foreign('reason_id')->references('id')->on('outgoingreason')
            ->onDelete('cascade');
            $table->foreign('marketplace_id')->references('id')->on('marketplace')
            ->onDelete('cascade');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_outgoing');
    }
};
