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
        Schema::create('tbl_contact', function (Blueprint $table) {
            $table->string('Name');
            $table->string('Email');
            $table->string('Mobile_Number');
            $table->string('Project');
            $table->string('Subject');
            $table->string('Message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_contact');
    }
};
