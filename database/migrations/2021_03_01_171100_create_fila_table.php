<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilaTable extends Migration
{
    
    public function up()
    {
     Schema::create('fila', function (Blueprint $table) {
      /*00*/    $table->id();
      /*0*/     $table->string('DATADEEXPORTACAO');
      /*1*/     $table->string('CODCENTRALREGULADORA');
      /*2*/     $table->string('NOMECENTRALREGULADORA');
      /*3*/     $table->string('CODCNESSOLICITANTE');
      /*4*/     $table->string('NOMEUNIDADESOLICITANTE');
      /*5*/     $table->string('CODCENTRALREGULADORASOLICITANTE');
      /*6*/     $table->string('NOMECENTRALREGULADORASOLICITANTE');
      /*7*/     $table->string('CODMODALIDADEFILA');
      /*8*/     $table->string('CODTIPODEFILA');
      /*9*/     $table->string('DATAHORADASOLICITACAO');
      /*10*/    $table->string('CODINTERNODOITEMDOGRUPODEPROCEDIMENTOS');
      /*11*/    $table->string('DESCINTERNADOITEMDOGRUPODEPROCEDIMENTOS');
      /*12*/    $table->string('CODINTERNODOGRUPODEPROCEDIMENTOS');
      /*13*/    $table->string('DESCINTERNADOGRUPODEPROCEDIMENTOS');
      /*14*/    $table->string('CODSIGTAP');
      /*15*/    $table->string('DESCSIGTAP');
      /*16*/    $table->string('NOMEDOUSUARIO');
      /*17*/    $table->string('DATADENASCIMENTODOUSUARIO');
      /*18*/    $table->string('NOMEDAMAEDOUSUARIO');
      /*19*/    $table->string('CNSDOUSUARIO');
      /*20*/    $table->string('CPFDOUSUARIO');
      /*21*/    $table->string('SEXODOUSUARIO');
      /*22*/    $table->string('CODSOLICITACAO');
      /*23*/    $table->string('CODCLASSIFICACAODERISCO');
      /*24*/    $table->string('POSICAONAFILA');
      /*25*/    $table->string('ESTIMATIVAPARAATENDIMENTODOPROCEDIMENTO');
      /*26*/    $table->string('ESTIMDEATENDIMENTODOPACIENTE');
      /*27*/    $table->string('PRODUCAOMEDIAMENSALDOPROCEDIMENTO');
      /*28*/    $table->string('CODCID');
      /*29*/    $table->string('DESCCID');
      /*30*/    $table->timestamps();
        });
    }

        public function down()
        {
         Schema::dropIfExists('fila');
        }
     

}






