<?php

namespace Database\Seeders;

use App\Models\Transaccion;
use Illuminate\Database\Seeder;

class TransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaccion::create([
            'id_cuenta' => 1,
            'monto' => 100,
            'id_tipo_transaccion' => 1,
            'id_motivo' => 1
        ]);
    }
}
