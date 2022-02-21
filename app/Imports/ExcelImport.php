<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection    
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key=>$value){
            if($key!=0){

                DB::table('pedidos')->insert(['Rut'=>$value[0],'Nombre'=>$value[1],'Apellido_Paterno'=>$value[2],'Apellido_Materno'=>$value[3],
                'Empresa'=>$value[4],'Dias'=>$value[5]-$value[10],'Monto_Diario'=>$value[6],'Monto_Final'=>($value[5]-$value[10])*$value[6],'Fecha_Inicial_Vacaciones'=>$value[8],
                'Fecha_Final_Vacaciones'=>$value[9],'Cantidad_Dias_Vacaciones'=>$value[10]]);
            }
        }
    }
}