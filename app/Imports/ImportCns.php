<?php

namespace App\Imports;

use App\Models\Cns;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCns implements ToModel
{
    
    public function model(array $row)
    {
        return new Cns([
            'DATADEEXPORTACAO'  => $row[0],
            'CODCENTRALREGULADORA'  => $row[1],
            'NOMECENTRALREGULADORA'  => $row[2],
            'CODCNESSOLICITANTE'  => $row[3],
            'NOMEUNIDADESOLICITANTE'  => $row[4],
            'CODCENTRALREGULADORASOLICITANTE'  => $row[5],
            'NOMECENTRALREGULADORASOLICITANTE'  => $row[6],
            'CODMODALIDADEFILA'  => $row[7],
            'CODTIPODEFILA'  => $row[8],
            'DATAHORADASOLICITACAO'  => $row[9],
            'CODINTERNODOITEMDOGRUPODEPROCEDIMENTOS'  => $row[10],
            'DESCINTERNADOITEMDOGRUPODEPROCEDIMENTOS'  => $row[11],
            'CODINTERNODOGRUPODEPROCEDIMENTOS'  => $row[12],
            'DESCINTERNADOGRUPODEPROCEDIMENTOS'  => $row[13],
            'CODSIGTAP'  => $row[14],
            'DESCSIGTAP'  => $row[15],
            'NOMEDOUSUARIO'  => $row[16],
            'DATADENASCIMENTODOUSUARIO'  => $row[17],
            'NOMEDAMAEDOUSUARIO'  => $row[18],
            'CNSDOUSUARIO'  => $row[19],
            'CPFDOUSUARIO'  => $row[20],
            'SEXODOUSUARIO'  => $row[21],
            'CODSOLICITACAO'  => $row[22],
            'CODCLASSIFICACAODERISCO'  => $row[23],
            'POSICAONAFILA'  => $row[24],
            'ESTIMATIVAPARAATENDIMENTODOPROCEDIMENTO'  => $row[25],
            'ESTIMDEATENDIMENTODOPACIENTE'  => $row[26],
            'PRODUCAOMEDIAMENSALDOPROCEDIMENTO'  => $row[27],
            'CODCID'  => $row[28],
           'DESCCID'  => $row[28],

        ]);
    }
}


