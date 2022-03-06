<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('usuarios')->truncate();
        DB::table('tipo_cuentas')->truncate();
        DB::table('tipo_transacciones')->truncate();
        DB::table('motivos')->truncate();
        DB::table('cuentas')->truncate();
        DB::table('transacciones')->truncate();

        $this->call([
            UsuarioSeeder::class,
            TipoCuentaSeeder::class,
            TipoTransaccionSeeder::class,
            MotivoSeeder::class,
            CuentaSeeder::class,
            TransaccionSeeder::class,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
