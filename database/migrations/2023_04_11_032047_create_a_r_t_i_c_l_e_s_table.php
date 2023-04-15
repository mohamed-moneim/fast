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
        Schema::create('a_r_t_i_c_l_e_s', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("body");
            $table->string("img");
            $table->date("date");
            $table->STRING("author");
            $table->string("metatitle");
            $table->string("metadesc");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_r_t_i_c_l_e_s');
    }
};
