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
        Schema::create('resources', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('main_menu_tbl_id')->nullable();
            $table->integer('sub_menu_tbl_id')->nullable();
            $table->string('tag')->nullable();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('banner')->nullable();
            $table->text('content')->nullable();
            $table->string('author')->nullable()->index('author_id');
            $table->tinyInteger('featured')->nullable()->default(0);
            $table->string('status')->nullable();
            $table->date('post_date')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->dateTime('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
