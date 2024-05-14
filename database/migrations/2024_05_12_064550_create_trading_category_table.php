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
        Schema::create('trading_category', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('category_type')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->dateTime('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trading_category');
    }
};
