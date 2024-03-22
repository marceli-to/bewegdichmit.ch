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
      Schema::create('registrations', function (Blueprint $table) {
        $table->id();
        $table->decimal('entry_fee', 8, 2);
        $table->string('category');
        $table->string('start_time');
        $table->string('group_name')->nullable();
        $table->integer('number_of_members')->nullable();
        $table->string('firstname');
        $table->string('name');
        $table->string('street');
        $table->string('location');
        $table->string('phone')->nullable();
        $table->string('email');
        $table->string('remarks')->nullable();
        // buddy, boolean, nullable, default false
        $table->boolean('buddy')->nullable()->default(false);

        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('registrations');
    }
};
