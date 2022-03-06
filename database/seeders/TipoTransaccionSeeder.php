<?php

namespace Database\Seeders;

use App\Models\TipoTransaccion;
use Illuminate\Database\Seeder;

class TipoTransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTransaccion::create([
            'tipo_transaccion' => 'Ingreso'
        ]);
    }
}
