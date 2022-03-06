<?php

namespace Database\Seeders;

use App\Models\Cuenta;
use Illuminate\Database\Seeder;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuenta::create([
            'numero' => '123456789',
            'nombre' => 'Cuenta de Ahorros',
            'saldo' => 100,
            'id_usuario' => 1,
            'id_tipo_cuenta' => 1
        ]);
    }
}
