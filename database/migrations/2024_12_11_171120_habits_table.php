<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->enum('types', ['walk', 'bike', 'vehicle']);
            $table->integer('habit_distance')->default(0);
            $table->float('carbon_footprint')->default(0);
            $table->timestamps();
        
            // Composite primary key (user_id + types)
            $table->primary(['user_id', 'types']);
        
            // Foreign key constraint for user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    public function down(): void
    {
        //
    }
};
