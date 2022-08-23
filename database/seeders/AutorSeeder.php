<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = new Autor();
        $autor->nombres = "Ponsiano";
        $autor->apellidos = "De Loor";
        $autor->cedula = "1206413435";
        $autor->ruc = "1206413435001";
        $autor->email = "ponsianodeloor@gmail.com";
        $autor->save();

        $autor = new Autor();
        $autor->nombres = "Thomas";
        $autor->apellidos = "Sizalema";
        $autor->cedula = "1206413436";
        $autor->ruc = "1206413436001";
        $autor->email = "ponsianodeloor@outlook.com";
        $autor->save();

    }
}
