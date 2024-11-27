<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicoToContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contatos', function (Blueprint $table) {
            // Adiciona a coluna 'servico' com tipo string
            $table->string('servico')->nullable(); // 'nullable' permite valores nulos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos', function (Blueprint $table) {
            // Remove a coluna 'servico' caso seja necessário reverter a migration
            $table->dropColumn('servico');
        });
    }
}
