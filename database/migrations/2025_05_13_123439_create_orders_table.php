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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_order')->nullable();
            $table->string('type')->nullable();
            $table->string('date_order')->nullable();
            $table->string('no_container')->nullable();
            $table->string('no_kapal')->nullable();
            $table->string('no_gudang')->nullable();
            $table->string('loading')->nullable();
            $table->string('destination')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('qty_bag')->nullable();
            $table->decimal('price')->nullable();
            $table->string('status')->nullable();
            $table->string('keterangan')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
