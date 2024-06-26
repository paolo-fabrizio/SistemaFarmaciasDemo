<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caja', function (Blueprint $table) {
            $table->foreign(['id_sucursal'], 'Caja_Sucursal_fk')->references(['id_sucursal'])->on('sucursales')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_usuario'], 'Caja_Usuario_fk	')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caja', function (Blueprint $table) {
            $table->dropForeign('Caja_Sucursal_fk');
            $table->dropForeign('Caja_Usuario_fk	');
        });
    }
};
