<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Card;
use Storage;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            // Programadores
            [ 'name' => 'Pedro', 'photo' => 'Pedro.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Juan', 'photo' => 'Juan.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Carlos', 'photo' => 'Carlos.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Juanita', 'photo' => 'Juanita.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Antonio', 'photo' => 'Antonio.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Carolina', 'photo' => 'Carolina.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Manuel', 'photo' => 'Manuel.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            //Modulos
            [ 'name' => 'Nómina', 'photo' => 'Nomina.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Facturación', 'photo' => 'Facturacion.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Recibos', 'photo' => 'Recibos.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Comprobante contable', 'photo' => 'ComprobanteContable.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Usuarios', 'photo' => 'Usuarios.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Contabilidad', 'photo' => 'Contabilidad.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            //Modulos
            [ 'name' => '404', 'photo' => 'Error_404.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Stack overflow', 'photo' => 'Error_StackOverflow.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Memory out of range', 'photo' => 'Error_Memory_out_of_range.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Null pointer', 'photo' => 'Error_Null_Pointer.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Syntax error', 'photo' => 'Error_Syntax_Error.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Encoding error', 'photo' => 'Error_Encoding.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
        ])->each(function($item, $key) {
            Card::create($item);
        });

    }
}
