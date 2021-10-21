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
            [ 'name' => 'Pedro', 'photo' => 'images/Pedro.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Juan', 'photo' => 'images/Juan.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Carlos', 'photo' => 'images/Carlos.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Juanita', 'photo' => 'images/Juanita.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Antonio', 'photo' => 'images/Antonio.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Carolina', 'photo' => 'images/Carolina.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            [ 'name' => 'Manuel', 'photo' => 'images/Manuel.png', 'rol' => 'Programadores', 'state' => 'Activo' ],
            //Modulos
            [ 'name' => 'Nómina', 'photo' => 'images/Nomina.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Facturación', 'photo' => 'images/Facturacion.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Recibos', 'photo' => 'images/Recibos.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Comprobante contable', 'photo' => 'images/ComprobanteContable.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Usuarios', 'photo' => 'images/Usuarios.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            [ 'name' => 'Contabilidad', 'photo' => 'images/Contabilidad.png', 'rol' => 'Modulo', 'state' => 'Activo' ],
            //Modulos
            [ 'name' => '404', 'photo' => 'images/Error_404.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Stack overflow', 'photo' => 'images/Error_StackOverflow.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Memory out of range', 'photo' => 'images/Error_Memory_out_of_range.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Null pointer', 'photo' => 'images/Error_Null_Pointer.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Syntax error', 'photo' => 'images/Error_Syntax_Error.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
            [ 'name' => 'Encoding error', 'photo' => 'images/Error_Encoding.png', 'rol' => 'Tipo de Error', 'state' => 'Activo' ],
        ])->each(function($item, $key) {
            Card::create($item);
        });

    }
}
