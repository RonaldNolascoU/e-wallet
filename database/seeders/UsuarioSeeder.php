<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre' => 'Usuario',
            'apellido' => 'Usuario',
            'correo' => 'usuario@gmail.com',
            'clave' => Hash::make('password'),
        ]);
    }
}
