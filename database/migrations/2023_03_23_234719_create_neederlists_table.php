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
        Schema::create('neederlists', function (Blueprint $table) {
            $table->id();
            $table->string('needername');
            $table->string('neederaddress');
            $table->string('needercontactnumber');
            $table->string('neederage');
            $table->string('neederlocation');
            $table->string('neederbloodtype');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neederlists');
    }
};
