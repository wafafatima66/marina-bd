<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famillies', function (Blueprint $table) {
            $table->id();
            $table->string('a_date')->nullable();
            $table->string('l_date');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('gender');
            $table->string('total_room');
            $table->string('total_member');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('famillies');
    }
}
