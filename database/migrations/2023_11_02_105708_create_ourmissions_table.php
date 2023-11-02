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
        Schema::create('ourmissions', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('subtittle');
            $table->text('description');
            $table->string('secondsubtittle');
            $table->text('seconddescription');
            $table->string('button');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourmissions');
    }
};
