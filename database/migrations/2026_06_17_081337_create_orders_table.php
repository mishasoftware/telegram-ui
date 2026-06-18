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

            $table->foreignId('project_id')->nullable();
            $table->foreignId('product_id')->nullable();

            $table->string('code')->nullable();
            $table->integer('quantity')->default(1);

            $table->integer('width')->nullable();
            $table->integer('height')->nullable();

            $table->string('material')->nullable();
            $table->text('description')->nullable();

            $table->string('status')->default('draft');

            $table->foreignId('current_department_id')->nullable();
            $table->foreignId('created_by')->nullable();

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
