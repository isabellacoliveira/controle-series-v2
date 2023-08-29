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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            // informa o número da temporada
            $table->unsignedTinyInteger('number');
            // criar chave estrangeira corretamente
            // usamos o cascade pois se apagarmos uma serie, ele apagará tudo o que estiver relacionado a ela
            $table->foreignId('series_id')->constrained('series')->onDelete('cascade'); // Adicione 'series' como referência
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
        Schema::dropIfExists('seasons');
    }
};
