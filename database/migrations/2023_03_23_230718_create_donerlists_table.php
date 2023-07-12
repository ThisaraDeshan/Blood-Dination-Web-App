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
        Schema::create('donerlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('donername');
            $table->string('doneraddress');
            $table->string('contactnumber');
            $table->string('donerage');
            $table->string('donerlocationlatitude');
            $table->string('donerbloodtype');
            $table->string('donerposttitle');
            $table->string('donerpostdescription');
            $table->timestamps();

            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donerlists');
    }
};
