<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('conversions', function (Blueprint $table) {
            $table->id();
            $table->string('click_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->decimal('revenue', 10, 2)->default(0);
            $table->timestamps();

            $table->foreign('click_id')->references('click_id')->on('clicks')->cascadeOnDelete();
            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('conversions');
    }
};
