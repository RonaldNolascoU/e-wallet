<?php

namespace Database\Seeders;

use App\Models\TipoCuenta;
use Illuminate\Database\Seeder;

class TipoCuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCuenta::insert(
            [
                'nombre' => 'Ahorros',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        TipoCuenta::insert(
            [
                'nombre' => 'Personal',
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
