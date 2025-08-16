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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('category')->default('rumah'); // rumah, interior, eksterior
            $table->string('location')->nullable();
            $table->integer('year')->nullable();
            $table->decimal('area', 12, 2)->nullable(); // luas dalam m2, support hingga 9999999999.99
            $table->string('status')->default('completed'); // completed, ongoing, planning
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
