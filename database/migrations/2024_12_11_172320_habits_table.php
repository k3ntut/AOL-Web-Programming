<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->enum('types', ['walk', 'bike', 'vehicle'])->primary();
            $tables->float('habit-distance');
            $tables->float('carbon-footprint');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};