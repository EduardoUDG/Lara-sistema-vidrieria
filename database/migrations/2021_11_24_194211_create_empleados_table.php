<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('curp');
            $table->string('fecha_nacimiento');
            $table->string('sexo');

            $table->unsignedBigInteger('seguro_id')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();

            $table->foreign('seguro_id')
                    ->references('id')->on('seguros')
                    ->onDelete('set null');

            $table->foreign('role_id')
                    ->references('id')->on('roles')
                    ->onDelete('set null');


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
        Schema::dropIfExists('empleados');
    }
}
