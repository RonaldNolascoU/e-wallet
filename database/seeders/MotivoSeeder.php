<?php

namespace Database\Seeders;

use App\Models\Motivo;
use Illuminate\Database\Seeder;

class MotivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motivo::create([
            'motivo' => 'Pago de servicios'
        ]);
    }
}
