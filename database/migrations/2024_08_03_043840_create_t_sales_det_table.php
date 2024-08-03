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
        Schema::create('t_sales_det', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sales_id')->constrained('t_sales')->onDelete('cascade');
            $table->foreignId('barang_id')->constrained('m_barang');
            $table->decimal('harga_bandrol', 15, 2);
            $table->integer('qty');
            $table->decimal('diskon_pct', 5, 2)->nullable();
            $table->decimal('diskon_nilai', 15, 2)->nullable();
            $table->decimal('harga_diskon', 15, 2);
            $table->decimal('total', 15, 2);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_sales_det');
    }
};
