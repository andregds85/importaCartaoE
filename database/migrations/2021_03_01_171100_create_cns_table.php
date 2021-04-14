<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnsTable extends Migration
{
    
    public function up()
    {
        Schema::create('cns', function (Blueprint $table) {
            $table->id();
            $table->string('DATADEEXPORTACAO');
            $table->string('CODCENTRALREGULADORA');
            $table->string('NOMECENTRALREGULADORA');
            $table->string('CODCNESSOLICITANTE');
            $table->string('NOMEUNIDADESOLICITANTE');
            $table->string('CODCENTRALREGULADORASOLICITANTE');
            $table->string('NOMECENTRALREGULADORASOLICITANTE');
            $table->string('CODMODALIDADEFILA');
            $table->string('CODTIPODEFILA');
            $table->string('DATAHORADASOLICITACAO');
            $table->string('CODINTERNODOITEMDOGRUPODEPROCEDIMENTOS');
            $table->string('DESCINTERNADOITEMDOGRUPODEPROCEDIMENTOS');
            $table->string('CODINTERNODOGRUPODEPROCEDIMENTOS');
            $table->string('DESCINTERNADOGRUPODEPROCEDIMENTOS');
            $table->string('CODSIGTAP');
            $table->string('DESCSIGTAP');
            $table->string('NOMEDOUSUARIO');
            $table->string('DATADENASCIMENTODOUSUARIO');
            $table->string('NOMEDAMAEDOUSUARIO');
            $table->string('CPFDOUSUARIO');
            $table->string('CODSOLICITACAO');
            $table->string('CODCLASSIFICACAODERISCO');
            $table->string('POSICAONAFILA');
            $table->string('ESTIMATIVAPARAATENDIMENTODOPROCEDIMENTO');
            $table->string('ESTIMDEATENDIMENTODOPACIENTE');
            $table->string('PRODUCAOMEDIAMENSALDOPROCEDIMENTO');
            $table->string('CODCID');
            $table->string('DESCCID');
            $table->timestamps();
        });
    }

        public function down()
        {
         Schema::dropIfExists('cns');
        }
     

}






