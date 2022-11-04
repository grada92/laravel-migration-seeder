<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Train extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string ('Azienda', 30);
            $table->string ('Stazione_di_partenza', 200);
            $table->string ('Stazione_di_arrivo', 200);
            $table->time ('Orario_di_partenza');
            $table->time ('Orario_di_arrivo');
            $table->tinyInteger('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->date('Data_partenza');
            $table->boolean('In_Orario');
            $table->boolean ('Cancellato');
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
        //
    }
}
