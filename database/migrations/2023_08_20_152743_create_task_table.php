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
        Schema::create('task', function (Blueprint $table) {
            $table->string('uuid', 36)->primary();
            $table->string('name')->nullable(false);
            $table->string('description')->nullable(true);
            $table->string('status_uuid')->nullable(false);
            $table->foreign('status_uuid')->references('uuid')->on('status');
            $table->string('category_uuid')->nullable(false);
            $table->foreign('category_uuid')->references('uuid')->on('category');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
