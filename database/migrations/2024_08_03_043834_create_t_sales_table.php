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
        Schema::create('t_sales', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->date('tgl');
            $table->foreignId('cust_id')->constrained('m_customer')->onDelete('cascade');
            $table->decimal('subtotal', 15, 2);
            $table->decimal('diskon', 15, 2);
            $table->decimal('ongkir', 15, 2);
            $table->decimal('total_bayar', 15, 2);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_sales');
    }
};
