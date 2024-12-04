<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            [ 'name' => 'Amazonas', ],
            [ 'name' => 'Anzoátegui', ],
            [ 'name' => 'Apure', ],
            [ 'name' => 'Aragua', ],
            [ 'name' => 'Barinas', ],
            [ 'name' => 'Bolívar', ],
            [ 'name' => 'Carabobo', ],
            [ 'name' => 'Cojedes', ],
            [ 'name' => 'Delta Amacuro', ],
            [ 'name' => 'Falcón', ],
            [ 'name' => 'Guárico', ],
            [ 'name' => 'Lara', ],
            [ 'name' => 'Mérida', ],
            [ 'name' => 'Miranda', ],
            [ 'name' => 'Monagas', ],
            [ 'name' => 'Nueva Esparta', ],
            [ 'name' => 'Portuguesa', ],
            [ 'name' => 'Sucre', ],
            [ 'name' => 'Táchira', ],
            [ 'name' => 'Trujillo', ],
            [ 'name' => 'La Guaira', ],
            [ 'name' => 'Yaracuy', ],
            [ 'name' => 'Zulia', ],
            [ 'name' => 'Dependencias Federales', ],
            [ 'name' => 'Distrito Capital', ]
        ];
        State::insert($names);
    }
}
