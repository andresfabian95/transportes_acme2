<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string("num_ced",20);
            $table->string("Primer_Nombre",75);
            $table->string("Segundo_Nombre",75);
            $table->string("Apellidos",75);
            $table->string("Direccion",50);
            $table->string("Telefono",20);
            $table->string("Ciudad",50);
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
        Schema::dropIfExists('personal');
    }
}
