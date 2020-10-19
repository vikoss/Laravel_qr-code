<?php

namespace App\Imports;

use App\ModelsNicolasRomero\Tax;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TaxesImport implements ToModel, WithHeadingRow
{
    //use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row['exp']) {
            return new Tax([
                'EXP'                           => $row['exp'] ?? null,
                'CLAVE_Y_VALOR_CATASTRAL'       => $row['clave_y_valor_catastral'] ?? null,
                'NO_ADEUDO_PREDIAL'             => $row['no_adeudo_predial'] ?? null,
                'APORTACIONES_MEJORAS'          => $row['aportaciones_mejoras'] ?? null,
                'ESTADO'                        => $row['estado'] ?? null,
                'CLAVE_CAT'                     => $row['clave_cat'] ?? null,
                'NOMBRE'                        => $row['nombre'] ?? null,
                'PAGO_PREDIO'                   => $row['pago_predio'] ?? null,
                'FECHA_DE_PAGO_PREDIAL'         => $row['fecha_de_pago_predial'] ?? null,
                'PAGO_CERT_CATASTRO'            => $row['pago_cert_catastro'] ?? null,
                'FECHA_DE_PAGO_CERTIFICACION'   => $row['fecha_de_pago_certificacion'] ?? null,
                'PAGO_NO_ADEUDO'                => $row['pago_no_adeudo'] ?? null,
                'FECHA_DE_PAGO_NO_ADEUDO'       => $row['fecha_de_pago_no_adeudo'] ?? null,
                'PAGO_MEJORAS'                  => $row['pago_mejoras'] ?? null,
                'FECHA_DE_PAGO_MEJORAS'         => $row['fecha_de_pago_mejoras'] ?? null,
                'VIGENCIA'                      => $row['vigencia'] ?? null,
                'FECHA_EMISION'                 => $row['fecha_emision'] ?? null,
            ]);
        }
    }
}
