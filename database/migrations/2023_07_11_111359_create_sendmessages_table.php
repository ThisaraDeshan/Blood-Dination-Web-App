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
        Schema::create('sendmessages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('neederid');
            $table->unsignedBigInteger('postdonerid');
            $table->string('needername');
            $table->string('needermessage');
            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sendmessages');
    }
};
