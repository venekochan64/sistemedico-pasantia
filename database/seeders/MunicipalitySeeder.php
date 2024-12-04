<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipalities = [
            [
                'id' => 1,
                'state_id' => 1,
                'name' => 'Alto Orinoco'
            ],
            [
                'id' => 2,
                'state_id' => 1,
                'name' => 'Atabapo'
            ],
            [
                'id' => 3,
                'state_id' => 1,
                'name' => 'Atures'
            ],
            [
                'id' => 4,
                'state_id' => 1,
                'name' => 'Autana'
            ],
            [
                'id' => 5,
                'state_id' => 1,
                'name' => 'Manapiare'
            ],
            [
                'id' => 6,
                'state_id' => 1,
                'name' => 'Maroa'
            ],
            [
                'id' => 7,
                'state_id' => 1,
                'name' => 'Río Negro'
            ],
            [
                'id' => 8,
                'state_id' => 2,
                'name' => 'Anaco'
            ],
            [
                'id' => 9,
                'state_id' => 2,
                'name' => 'Aragua'
            ],
            [
                'id' => 10,
                'state_id' => 2,
                'name' => 'Manuel Ezequiel Bruzual'
            ],
            [
                'id' => 11,
                'state_id' => 2,
                'name' => 'Diego Bautista Urbaneja'
            ],
            [
                'id' => 12,
                'state_id' => 2,
                'name' => 'Fernando Peñalver'
            ],
            [
                'id' => 13,
                'state_id' => 2,
                'name' => 'Francisco Del Carmen Carvajal'
            ],
            [
                'id' => 14,
                'state_id' => 2,
                'name' => 'General Sir Arthur McGregor'
            ],
            [
                'id' => 15,
                'state_id' => 2,
                'name' => 'Guanta'
            ],
            [
                'id' => 16,
                'state_id' => 2,
                'name' => 'Independencia'
            ],
            [
                'id' => 17,
                'state_id' => 2,
                'name' => 'José Gregorio Monagas'
            ],
            [
                'id' => 18,
                'state_id' => 2,
                'name' => 'Juan Antonio Sotillo'
            ],
            [
                'id' => 19,
                'state_id' => 2,
                'name' => 'Juan Manuel Cajigal'
            ],
            [
                'id' => 20,
                'state_id' => 2,
                'name' => 'Libertad'
            ],
            [
                'id' => 21,
                'state_id' => 2,
                'name' => 'Francisco de Miranda'
            ],
            [
                'id' => 22,
                'state_id' => 2,
                'name' => 'Pedro María Freites'
            ],
            [
                'id' => 23,
                'state_id' => 2,
                'name' => 'Píritu'
            ],
            [
                'id' => 24,
                'state_id' => 2,
                'name' => 'San José de Guanipa'
            ],
            [
                'id' => 25,
                'state_id' => 2,
                'name' => 'San Juan de Capistrano'
            ],
            [
                'id' => 26,
                'state_id' => 2,
                'name' => 'Santa Ana'
            ],
            [
                'id' => 27,
                'state_id' => 2,
                'name' => 'Simón Bolívar'
            ],
            [
                'id' => 28,
                'state_id' => 2,
                'name' => 'Simón Rodríguez'
            ],
            [
                'id' => 29,
                'state_id' => 3,
                'name' => 'Achaguas'
            ],
            [
                'id' => 30,
                'state_id' => 3,
                'name' => 'Biruaca'
            ],
            [
                'id' => 31,
                'state_id' => 3,
                'name' => 'Muñóz'
            ],
            [
                'id' => 32,
                'state_id' => 3,
                'name' => 'Páez'
            ],
            [
                'id' => 33,
                'state_id' => 3,
                'name' => 'Pedro Camejo'
            ],
            [
                'id' => 34,
                'state_id' => 3,
                'name' => 'Rómulo Gallegos'
            ],
            [
                'id' => 35,
                'state_id' => 3,
                'name' => 'San Fernando'
            ],
            [
                'id' => 36,
                'state_id' => 4,
                'name' => 'Atanasio Girardot'
            ],
            [
                'id' => 37,
                'state_id' => 4,
                'name' => 'Bolívar'
            ],
            [
                'id' => 38,
                'state_id' => 4,
                'name' => 'Camatagua'
            ],
            [
                'id' => 39,
                'state_id' => 4,
                'name' => 'Francisco Linares Alcántara'
            ],
            [
                'id' => 40,
                'state_id' => 4,
                'name' => 'José Ángel Lamas'
            ],
            [
                'id' => 41,
                'state_id' => 4,
                'name' => 'José Félix Ribas'
            ],
            [
                'id' => 42,
                'state_id' => 4,
                'name' => 'José Rafael Revenga'
            ],
            [
                'id' => 43,
                'state_id' => 4,
                'name' => 'Libertador'
            ],
            [
                'id' => 44,
                'state_id' => 4,
                'name' => 'Mario Briceño Iragorry'
            ],
            [
                'id' => 45,
                'state_id' => 4,
                'name' => 'Ocumare de la Costa de Oro'
            ],
            [
                'id' => 46,
                'state_id' => 4,
                'name' => 'San Casimiro'
            ],
            [
                'id' => 47,
                'state_id' => 4,
                'name' => 'San Sebastián'
            ],
            [
                'id' => 48,
                'state_id' => 4,
                'name' => 'Santiago Mariño'
            ],
            [
                'id' => 49,
                'state_id' => 4,
                'name' => 'Santos Michelena'
            ],
            [
                'id' => 50,
                'state_id' => 4,
                'name' => 'Sucre'
            ],
            [
                'id' => 51,
                'state_id' => 4,
                'name' => 'Tovar'
            ],
            [
                'id' => 52,
                'state_id' => 4,
                'name' => 'Urdaneta'
            ],
            [
                'id' => 53,
                'state_id' => 4,
                'name' => 'Zamora'
            ],
            [
                'id' => 54,
                'state_id' => 5,
                'name' => 'Alberto Arvelo Torrealba'
            ],
            [
                'id' => 55,
                'state_id' => 5,
                'name' => 'Andrés Eloy Blanco'
            ],
            [
                'id' => 56,
                'state_id' => 5,
                'name' => 'Antonio José de Sucre'
            ],
            [
                'id' => 57,
                'state_id' => 5,
                'name' => 'Arismendi'
            ],
            [
                'id' => 58,
                'state_id' => 5,
                'name' => 'Barinas'
            ],
            [
                'id' => 59,
                'state_id' => 5,
                'name' => 'Bolívar'
            ],
            [
                'id' => 60,
                'state_id' => 5,
                'name' => 'Cruz Paredes'
            ],
            [
                'id' => 61,
                'state_id' => 5,
                'name' => 'Ezequiel Zamora'
            ],
            [
                'id' => 62,
                'state_id' => 5,
                'name' => 'Obispos'
            ],
            [
                'id' => 63,
                'state_id' => 5,
                'name' => 'Pedraza'
            ],
            [
                'id' => 64,
                'state_id' => 5,
                'name' => 'Rojas'
            ],
            [
                'id' => 65,
                'state_id' => 5,
                'name' => 'Sosa'
            ],
            [
                'id' => 66,
                'state_id' => 6,
                'name' => 'Caroní'
            ],
            [
                'id' => 67,
                'state_id' => 6,
                'name' => 'Cedeño'
            ],
            [
                'id' => 68,
                'state_id' => 6,
                'name' => 'El Callao'
            ],
            [
                'id' => 69,
                'state_id' => 6,
                'name' => 'Gran Sabana'
            ],
            [
                'id' => 70,
                'state_id' => 6,
                'name' => 'Heres'
            ],
            [
                'id' => 71,
                'state_id' => 6,
                'name' => 'Piar'
            ],
            [
                'id' => 72,
                'state_id' => 6,
                'name' => 'Angostura (Raúl Leoni)'
            ],
            [
                'id' => 73,
                'state_id' => 6,
                'name' => 'Roscio'
            ],
            [
                'id' => 74,
                'state_id' => 6,
                'name' => 'Sifontes'
            ],
            [
                'id' => 75,
                'state_id' => 6,
                'name' => 'Sucre'
            ],
            [
                'id' => 76,
                'state_id' => 6,
                'name' => 'Padre Pedro Chien'
            ],
            [
                'id' => 77,
                'state_id' => 7,
                'name' => 'Bejuma'
            ],
            [
                'id' => 78,
                'state_id' => 7,
                'name' => 'Carlos Arvelo'
            ],
            [
                'id' => 79,
                'state_id' => 7,
                'name' => 'Diego Ibarra'
            ],
            [
                'id' => 80,
                'state_id' => 7,
                'name' => 'Guacara'
            ],
            [
                'id' => 81,
                'state_id' => 7,
                'name' => 'Juan José Mora'
            ],
            [
                'id' => 82,
                'state_id' => 7,
                'name' => 'Libertador'
            ],
            [
                'id' => 83,
                'state_id' => 7,
                'name' => 'Los Guayos'
            ],
            [
                'id' => 84,
                'state_id' => 7,
                'name' => 'Miranda'
            ],
            [
                'id' => 85,
                'state_id' => 7,
                'name' => 'Montalbán'
            ],
            [
                'id' => 86,
                'state_id' => 7,
                'name' => 'Naguanagua'
            ],
            [
                'id' => 87,
                'state_id' => 7,
                'name' => 'Puerto Cabello'
            ],
            [
                'id' => 88,
                'state_id' => 7,
                'name' => 'San Diego'
            ],
            [
                'id' => 89,
                'state_id' => 7,
                'name' => 'San Joaquín'
            ],
            [
                'id' => 90,
                'state_id' => 7,
                'name' => 'Valencia'
            ],
            [
                'id' => 91,
                'state_id' => 8,
                'name' => 'Anzoátegui'
            ],
            [
                'id' => 92,
                'state_id' => 8,
                'name' => 'Tinaquillo'
            ],
            [
                'id' => 93,
                'state_id' => 8,
                'name' => 'Girardot'
            ],
            [
                'id' => 94,
                'state_id' => 8,
                'name' => 'Lima Blanco'
            ],
            [
                'id' => 95,
                'state_id' => 8,
                'name' => 'Pao de San Juan Bautista'
            ],
            [
                'id' => 96,
                'state_id' => 8,
                'name' => 'Ricaurte'
            ],
            [
                'id' => 97,
                'state_id' => 8,
                'name' => 'Rómulo Gallegos'
            ],
            [
                'id' => 98,
                'state_id' => 8,
                'name' => 'San Carlos'
            ],
            [
                'id' => 99,
                'state_id' => 8,
                'name' => 'Tinaco'
            ],
            [
                'id' => 100,
                'state_id' => 9,
                'name' => 'Antonio Díaz'
            ],
            [
                'id' => 101,
                'state_id' => 9,
                'name' => 'Casacoima'
            ],
            [
                'id' => 102,
                'state_id' => 9,
                'name' => 'Pedernales'
            ],
            [
                'id' => 103,
                'state_id' => 9,
                'name' => 'Tucupita'
            ],
            [
                'id' => 104,
                'state_id' => 10,
                'name' => 'Acosta'
            ],
            [
                'id' => 105,
                'state_id' => 10,
                'name' => 'Bolívar'
            ],
            [
                'id' => 106,
                'state_id' => 10,
                'name' => 'Buchivacoa'
            ],
            [
                'id' => 107,
                'state_id' => 10,
                'name' => 'Cacique Manaure'
            ],
            [
                'id' => 108,
                'state_id' => 10,
                'name' => 'Carirubana'
            ],
            [
                'id' => 109,
                'state_id' => 10,
                'name' => 'Colina'
            ],
            [
                'id' => 110,
                'state_id' => 10,
                'name' => 'Dabajuro'
            ],
            [
                'id' => 111,
                'state_id' => 10,
                'name' => 'Democracia'
            ],
            [
                'id' => 112,
                'state_id' => 10,
                'name' => 'Falcón'
            ],
            [
                'id' => 113,
                'state_id' => 10,
                'name' => 'Federación'
            ],
            [
                'id' => 114,
                'state_id' => 10,
                'name' => 'Jacura'
            ],
            [
                'id' => 115,
                'state_id' => 10,
                'name' => 'José Laurencio Silva'
            ],
            [
                'id' => 116,
                'state_id' => 10,
                'name' => 'Los Taques'
            ],
            [
                'id' => 117,
                'state_id' => 10,
                'name' => 'Mauroa'
            ],
            [
                'id' => 118,
                'state_id' => 10,
                'name' => 'Miranda'
            ],
            [
                'id' => 119,
                'state_id' => 10,
                'name' => 'Monseñor Iturriza'
            ],
            [
                'id' => 120,
                'state_id' => 10,
                'name' => 'Palmasola'
            ],
            [
                'id' => 121,
                'state_id' => 10,
                'name' => 'Petit'
            ],
            [
                'id' => 122,
                'state_id' => 10,
                'name' => 'Píritu'
            ],
            [
                'id' => 123,
                'state_id' => 10,
                'name' => 'San Francisco'
            ],
            [
                'id' => 124,
                'state_id' => 10,
                'name' => 'Sucre'
            ],
            [
                'id' => 125,
                'state_id' => 10,
                'name' => 'Tocópero'
            ],
            [
                'id' => 126,
                'state_id' => 10,
                'name' => 'Unión'
            ],
            [
                'id' => 127,
                'state_id' => 10,
                'name' => 'Urumaco'
            ],
            [
                'id' => 128,
                'state_id' => 10,
                'name' => 'Zamora'
            ],
            [
                'id' => 129,
                'state_id' => 11,
                'name' => 'Camaguán'
            ],
            [
                'id' => 130,
                'state_id' => 11,
                'name' => 'Chaguaramas'
            ],
            [
                'id' => 131,
                'state_id' => 11,
                'name' => 'El Socorro'
            ],
            [
                'id' => 132,
                'state_id' => 11,
                'name' => 'José Félix Ribas'
            ],
            [
                'id' => 133,
                'state_id' => 11,
                'name' => 'José Tadeo Monagas'
            ],
            [
                'id' => 134,
                'state_id' => 11,
                'name' => 'Juan Germán Roscio'
            ],
            [
                'id' => 135,
                'state_id' => 11,
                'name' => 'Julián Mellado'
            ],
            [
                'id' => 136,
                'state_id' => 11,
                'name' => 'Las Mercedes'
            ],
            [
                'id' => 137,
                'state_id' => 11,
                'name' => 'Leonardo Infante'
            ],
            [
                'id' => 138,
                'state_id' => 11,
                'name' => 'Pedro Zaraza'
            ],
            [
                'id' => 139,
                'state_id' => 11,
                'name' => 'Ortíz'
            ],
            [
                'id' => 140,
                'state_id' => 11,
                'name' => 'San Gerónimo de Guayabal'
            ],
            [
                'id' => 141,
                'state_id' => 11,
                'name' => 'San José de Guaribe'
            ],
            [
                'id' => 142,
                'state_id' => 11,
                'name' => 'Santa María de Ipire'
            ],
            [
                'id' => 143,
                'state_id' => 11,
                'name' => 'Sebastián Francisco de Miranda'
            ],
            [
                'id' => 144,
                'state_id' => 12,
                'name' => 'Andrés Eloy Blanco'
            ],
            [
                'id' => 145,
                'state_id' => 12,
                'name' => 'Crespo'
            ],
            [
                'id' => 146,
                'state_id' => 12,
                'name' => 'Iribarren'
            ],
            [
                'id' => 147,
                'state_id' => 12,
                'name' => 'Jiménez'
            ],
            [
                'id' => 148,
                'state_id' => 12,
                'name' => 'Morán'
            ],
            [
                'id' => 149,
                'state_id' => 12,
                'name' => 'Palavecino'
            ],
            [
                'id' => 150,
                'state_id' => 12,
                'name' => 'Simón Planas'
            ],
            [
                'id' => 151,
                'state_id' => 12,
                'name' => 'Torres'
            ],
            [
                'id' => 152,
                'state_id' => 12,
                'name' => 'Urdaneta'
            ],
            [
                'id' => 179,
                'state_id' => 13,
                'name' => 'Alberto Adriani'
            ],
            [
                'id' => 180,
                'state_id' => 13,
                'name' => 'Andrés Bello'
            ],
            [
                'id' => 181,
                'state_id' => 13,
                'name' => 'Antonio Pinto Salinas'
            ],
            [
                'id' => 182,
                'state_id' => 13,
                'name' => 'Aricagua'
            ],
            [
                'id' => 183,
                'state_id' => 13,
                'name' => 'Arzobispo Chacón'
            ],
            [
                'id' => 184,
                'state_id' => 13,
                'name' => 'Campo Elías'
            ],
            [
                'id' => 185,
                'state_id' => 13,
                'name' => 'Caracciolo Parra Olmedo'
            ],
            [
                'id' => 186,
                'state_id' => 13,
                'name' => 'Cardenal Quintero'
            ],
            [
                'id' => 187,
                'state_id' => 13,
                'name' => 'Guaraque'
            ],
            [
                'id' => 188,
                'state_id' => 13,
                'name' => 'Julio César Salas'
            ],
            [
                'id' => 189,
                'state_id' => 13,
                'name' => 'Justo Briceño'
            ],
            [
                'id' => 190,
                'state_id' => 13,
                'name' => 'Libertador'
            ],
            [
                'id' => 191,
                'state_id' => 13,
                'name' => 'Miranda'
            ],
            [
                'id' => 192,
                'state_id' => 13,
                'name' => 'Obispo Ramos de Lora'
            ],
            [
                'id' => 193,
                'state_id' => 13,
                'name' => 'Padre Noguera'
            ],
            [
                'id' => 194,
                'state_id' => 13,
                'name' => 'Pueblo Llano'
            ],
            [
                'id' => 195,
                'state_id' => 13,
                'name' => 'Rangel'
            ],
            [
                'id' => 196,
                'state_id' => 13,
                'name' => 'Rivas Dávila'
            ],
            [
                'id' => 197,
                'state_id' => 13,
                'name' => 'Santos Marquina'
            ],
            [
                'id' => 198,
                'state_id' => 13,
                'name' => 'Sucre'
            ],
            [
                'id' => 199,
                'state_id' => 13,
                'name' => 'Tovar'
            ],
            [
                'id' => 200,
                'state_id' => 13,
                'name' => 'Tulio Febres Cordero'
            ],
            [
                'id' => 201,
                'state_id' => 13,
                'name' => 'Zea'
            ],
            [
                'id' => 223,
                'state_id' => 14,
                'name' => 'Acevedo'
            ],
            [
                'id' => 224,
                'state_id' => 14,
                'name' => 'Andrés Bello'
            ],
            [
                'id' => 225,
                'state_id' => 14,
                'name' => 'Baruta'
            ],
            [
                'id' => 226,
                'state_id' => 14,
                'name' => 'Brión'
            ],
            [
                'id' => 227,
                'state_id' => 14,
                'name' => 'Buroz'
            ],
            [
                'id' => 228,
                'state_id' => 14,
                'name' => 'Carrizal'
            ],
            [
                'id' => 229,
                'state_id' => 14,
                'name' => 'Chacao'
            ],
            [
                'id' => 230,
                'state_id' => 14,
                'name' => 'Cristóbal Rojas'
            ],
            [
                'id' => 231,
                'state_id' => 14,
                'name' => 'El Hatillo'
            ],
            [
                'id' => 232,
                'state_id' => 14,
                'name' => 'Guaicaipuro'
            ],
            [
                'id' => 233,
                'state_id' => 14,
                'name' => 'Independencia'
            ],
            [
                'id' => 234,
                'state_id' => 14,
                'name' => 'Lander'
            ],
            [
                'id' => 235,
                'state_id' => 14,
                'name' => 'Los Salias'
            ],
            [
                'id' => 236,
                'state_id' => 14,
                'name' => 'Páez'
            ],
            [
                'id' => 237,
                'state_id' => 14,
                'name' => 'Paz Castillo'
            ],
            [
                'id' => 238,
                'state_id' => 14,
                'name' => 'Pedro Gual'
            ],
            [
                'id' => 239,
                'state_id' => 14,
                'name' => 'Plaza'
            ],
            [
                'id' => 240,
                'state_id' => 14,
                'name' => 'Simón Bolívar'
            ],
            [
                'id' => 241,
                'state_id' => 14,
                'name' => 'Sucre'
            ],
            [
                'id' => 242,
                'state_id' => 14,
                'name' => 'Urdaneta'
            ],
            [
                'id' => 243,
                'state_id' => 14,
                'name' => 'Zamora'
            ],
            [
                'id' => 258,
                'state_id' => 15,
                'name' => 'Acosta'
            ],
            [
                'id' => 259,
                'state_id' => 15,
                'name' => 'Aguasay'
            ],
            [
                'id' => 260,
                'state_id' => 15,
                'name' => 'Bolívar'
            ],
            [
                'id' => 261,
                'state_id' => 15,
                'name' => 'Caripe'
            ],
            [
                'id' => 262,
                'state_id' => 15,
                'name' => 'Cedeño'
            ],
            [
                'id' => 263,
                'state_id' => 15,
                'name' => 'Ezequiel Zamora'
            ],
            [
                'id' => 264,
                'state_id' => 15,
                'name' => 'Libertador'
            ],
            [
                'id' => 265,
                'state_id' => 15,
                'name' => 'Maturín'
            ],
            [
                'id' => 266,
                'state_id' => 15,
                'name' => 'Piar'
            ],
            [
                'id' => 267,
                'state_id' => 15,
                'name' => 'Punceres'
            ],
            [
                'id' => 268,
                'state_id' => 15,
                'name' => 'Santa Bárbara'
            ],
            [
                'id' => 269,
                'state_id' => 15,
                'name' => 'Sotillo'
            ],
            [
                'id' => 270,
                'state_id' => 15,
                'name' => 'Uracoa'
            ],
            [
                'id' => 271,
                'state_id' => 16,
                'name' => 'Antolín del Campo'
            ],
            [
                'id' => 272,
                'state_id' => 16,
                'name' => 'Arismendi'
            ],
            [
                'id' => 273,
                'state_id' => 16,
                'name' => 'García'
            ],
            [
                'id' => 274,
                'state_id' => 16,
                'name' => 'Gómez'
            ],
            [
                'id' => 275,
                'state_id' => 16,
                'name' => 'Maneiro'
            ],
            [
                'id' => 276,
                'state_id' => 16,
                'name' => 'Marcano'
            ],
            [
                'id' => 277,
                'state_id' => 16,
                'name' => 'Mariño'
            ],
            [
                'id' => 278,
                'state_id' => 16,
                'name' => 'Península de Macanao'
            ],
            [
                'id' => 279,
                'state_id' => 16,
                'name' => 'Tubores'
            ],
            [
                'id' => 280,
                'state_id' => 16,
                'name' => 'Villalba'
            ],
            [
                'id' => 281,
                'state_id' => 16,
                'name' => 'Díaz'
            ],
            [
                'id' => 282,
                'state_id' => 17,
                'name' => 'Agua Blanca'
            ],
            [
                'id' => 283,
                'state_id' => 17,
                'name' => 'Araure'
            ],
            [
                'id' => 284,
                'state_id' => 17,
                'name' => 'Esteller'
            ],
            [
                'id' => 285,
                'state_id' => 17,
                'name' => 'Guanare'
            ],
            [
                'id' => 286,
                'state_id' => 17,
                'name' => 'Guanarito'
            ],
            [
                'id' => 287,
                'state_id' => 17,
                'name' => 'Monseñor José Vicente de Unda'
            ],
            [
                'id' => 288,
                'state_id' => 17,
                'name' => 'Ospino'
            ],
            [
                'id' => 289,
                'state_id' => 17,
                'name' => 'Páez'
            ],
            [
                'id' => 290,
                'state_id' => 17,
                'name' => 'Papelón'
            ],
            [
                'id' => 291,
                'state_id' => 17,
                'name' => 'San Genaro de Boconoíto'
            ],
            [
                'id' => 292,
                'state_id' => 17,
                'name' => 'San Rafael de Onoto'
            ],
            [
                'id' => 293,
                'state_id' => 17,
                'name' => 'Santa Rosalía'
            ],
            [
                'id' => 294,
                'state_id' => 17,
                'name' => 'Sucre'
            ],
            [
                'id' => 295,
                'state_id' => 17,
                'name' => 'Turén'
            ],
            [
                'id' => 296,
                'state_id' => 18,
                'name' => 'Andrés Eloy Blanco'
            ],
            [
                'id' => 297,
                'state_id' => 18,
                'name' => 'Andrés Mata'
            ],
            [
                'id' => 298,
                'state_id' => 18,
                'name' => 'Arismendi'
            ],
            [
                'id' => 299,
                'state_id' => 18,
                'name' => 'Benítez'
            ],
            [
                'id' => 300,
                'state_id' => 18,
                'name' => 'Bermúdez'
            ],
            [
                'id' => 301,
                'state_id' => 18,
                'name' => 'Bolívar'
            ],
            [
                'id' => 302,
                'state_id' => 18,
                'name' => 'Cajigal'
            ],
            [
                'id' => 303,
                'state_id' => 18,
                'name' => 'Cruz Salmerón Acosta'
            ],
            [
                'id' => 304,
                'state_id' => 18,
                'name' => 'Libertador'
            ],
            [
                'id' => 305,
                'state_id' => 18,
                'name' => 'Mariño'
            ],
            [
                'id' => 306,
                'state_id' => 18,
                'name' => 'Mejía'
            ],
            [
                'id' => 307,
                'state_id' => 18,
                'name' => 'Montes'
            ],
            [
                'id' => 308,
                'state_id' => 18,
                'name' => 'Ribero'
            ],
            [
                'id' => 309,
                'state_id' => 18,
                'name' => 'Sucre'
            ],
            [
                'id' => 310,
                'state_id' => 18,
                'name' => 'Valdéz'
            ],
            [
                'id' => 341,
                'state_id' => 19,
                'name' => 'Andrés Bello'
            ],
            [
                'id' => 342,
                'state_id' => 19,
                'name' => 'Antonio Rómulo Costa'
            ],
            [
                'id' => 343,
                'state_id' => 19,
                'name' => 'Ayacucho'
            ],
            [
                'id' => 344,
                'state_id' => 19,
                'name' => 'Bolívar'
            ],
            [
                'id' => 345,
                'state_id' => 19,
                'name' => 'Cárdenas'
            ],
            [
                'id' => 346,
                'state_id' => 19,
                'name' => 'Córdoba'
            ],
            [
                'id' => 347,
                'state_id' => 19,
                'name' => 'Fernández Feo'
            ],
            [
                'id' => 348,
                'state_id' => 19,
                'name' => 'Francisco de Miranda'
            ],
            [
                'id' => 349,
                'state_id' => 19,
                'name' => 'García de Hevia'
            ],
            [
                'id' => 350,
                'state_id' => 19,
                'name' => 'Guásimos'
            ],
            [
                'id' => 351,
                'state_id' => 19,
                'name' => 'Independencia'
            ],
            [
                'id' => 352,
                'state_id' => 19,
                'name' => 'Jáuregui'
            ],
            [
                'id' => 353,
                'state_id' => 19,
                'name' => 'José María Vargas'
            ],
            [
                'id' => 354,
                'state_id' => 19,
                'name' => 'Junín'
            ],
            [
                'id' => 355,
                'state_id' => 19,
                'name' => 'Libertad'
            ],
            [
                'id' => 356,
                'state_id' => 19,
                'name' => 'Libertador'
            ],
            [
                'id' => 357,
                'state_id' => 19,
                'name' => 'Lobatera'
            ],
            [
                'id' => 358,
                'state_id' => 19,
                'name' => 'Michelena'
            ],
            [
                'id' => 359,
                'state_id' => 19,
                'name' => 'Panamericano'
            ],
            [
                'id' => 360,
                'state_id' => 19,
                'name' => 'Pedro María Ureña'
            ],
            [
                'id' => 361,
                'state_id' => 19,
                'name' => 'Rafael Urdaneta'
            ],
            [
                'id' => 362,
                'state_id' => 19,
                'name' => 'Samuel Darío Maldonado'
            ],
            [
                'id' => 363,
                'state_id' => 19,
                'name' => 'San Cristóbal'
            ],
            [
                'id' => 364,
                'state_id' => 19,
                'name' => 'Seboruco'
            ],
            [
                'id' => 365,
                'state_id' => 19,
                'name' => 'Simón Rodríguez'
            ],
            [
                'id' => 366,
                'state_id' => 19,
                'name' => 'Sucre'
            ],
            [
                'id' => 367,
                'state_id' => 19,
                'name' => 'Torbes'
            ],
            [
                'id' => 368,
                'state_id' => 19,
                'name' => 'Uribante'
            ],
            [
                'id' => 369,
                'state_id' => 19,
                'name' => 'San Judas Tadeo'
            ],
            [
                'id' => 370,
                'state_id' => 20,
                'name' => 'Andrés Bello'
            ],
            [
                'id' => 371,
                'state_id' => 20,
                'name' => 'Boconó'
            ],
            [
                'id' => 372,
                'state_id' => 20,
                'name' => 'Bolívar'
            ],
            [
                'id' => 373,
                'state_id' => 20,
                'name' => 'Candelaria'
            ],
            [
                'id' => 374,
                'state_id' => 20,
                'name' => 'Carache'
            ],
            [
                'id' => 375,
                'state_id' => 20,
                'name' => 'Escuque'
            ],
            [
                'id' => 376,
                'state_id' => 20,
                'name' => 'José Felipe Márquez Cañizalez'
            ],
            [
                'id' => 377,
                'state_id' => 20,
                'name' => 'Juan Vicente Campos Elías'
            ],
            [
                'id' => 378,
                'state_id' => 20,
                'name' => 'La Ceiba'
            ],
            [
                'id' => 379,
                'state_id' => 20,
                'name' => 'Miranda'
            ],
            [
                'id' => 380,
                'state_id' => 20,
                'name' => 'Monte Carmelo'
            ],
            [
                'id' => 381,
                'state_id' => 20,
                'name' => 'Motatán'
            ],
            [
                'id' => 382,
                'state_id' => 20,
                'name' => 'Pampán'
            ],
            [
                'id' => 383,
                'state_id' => 20,
                'name' => 'Pampanito'
            ],
            [
                'id' => 384,
                'state_id' => 20,
                'name' => 'Rafael Rangel'
            ],
            [
                'id' => 385,
                'state_id' => 20,
                'name' => 'San Rafael de Carvajal'
            ],
            [
                'id' => 386,
                'state_id' => 20,
                'name' => 'Sucre'
            ],
            [
                'id' => 387,
                'state_id' => 20,
                'name' => 'Trujillo'
            ],
            [
                'id' => 388,
                'state_id' => 20,
                'name' => 'Urdaneta'
            ],
            [
                'id' => 389,
                'state_id' => 20,
                'name' => 'Valera'
            ],
            [
                'id' => 390,
                'state_id' => 21,
                'name' => 'Vargas'
            ],
            [
                'id' => 391,
                'state_id' => 22,
                'name' => 'Arístides Bastidas'
            ],
            [
                'id' => 392,
                'state_id' => 22,
                'name' => 'Bolívar'
            ],
            [
                'id' => 407,
                'state_id' => 22,
                'name' => 'Bruzual'
            ],
            [
                'id' => 408,
                'state_id' => 22,
                'name' => 'Cocorote'
            ],
            [
                'id' => 409,
                'state_id' => 22,
                'name' => 'Independencia'
            ],
            [
                'id' => 410,
                'state_id' => 22,
                'name' => 'José Antonio Páez'
            ],
            [
                'id' => 411,
                'state_id' => 22,
                'name' => 'La Trinidad'
            ],
            [
                'id' => 412,
                'state_id' => 22,
                'name' => 'Manuel Monge'
            ],
            [
                'id' => 413,
                'state_id' => 22,
                'name' => 'Nirgua'
            ],
            [
                'id' => 414,
                'state_id' => 22,
                'name' => 'Peña'
            ],
            [
                'id' => 415,
                'state_id' => 22,
                'name' => 'San Felipe'
            ],
            [
                'id' => 416,
                'state_id' => 22,
                'name' => 'Sucre'
            ],
            [
                'id' => 417,
                'state_id' => 22,
                'name' => 'Urachiche'
            ],
            [
                'id' => 418,
                'state_id' => 22,
                'name' => 'José Joaquín Veroes'
            ],
            [
                'id' => 441,
                'state_id' => 23,
                'name' => 'Almirante Padilla'
            ],
            [
                'id' => 442,
                'state_id' => 23,
                'name' => 'Baralt'
            ],
            [
                'id' => 443,
                'state_id' => 23,
                'name' => 'Cabimas'
            ],
            [
                'id' => 444,
                'state_id' => 23,
                'name' => 'Catatumbo'
            ],
            [
                'id' => 445,
                'state_id' => 23,
                'name' => 'Colón'
            ],
            [
                'id' => 446,
                'state_id' => 23,
                'name' => 'Francisco Javier Pulgar'
            ],
            [
                'id' => 447,
                'state_id' => 23,
                'name' => 'Páez'
            ],
            [
                'id' => 448,
                'state_id' => 23,
                'name' => 'Jesús Enrique Losada'
            ],
            [
                'id' => 449,
                'state_id' => 23,
                'name' => 'Jesús María Semprún'
            ],
            [
                'id' => 450,
                'state_id' => 23,
                'name' => 'La Cañada de Urdaneta'
            ],
            [
                'id' => 451,
                'state_id' => 23,
                'name' => 'Lagunillas'
            ],
            [
                'id' => 452,
                'state_id' => 23,
                'name' => 'Machiques de Perijá'
            ],
            [
                'id' => 453,
                'state_id' => 23,
                'name' => 'Mara'
            ],
            [
                'id' => 454,
                'state_id' => 23,
                'name' => 'Maracaibo'
            ],
            [
                'id' => 455,
                'state_id' => 23,
                'name' => 'Miranda'
            ],
            [
                'id' => 456,
                'state_id' => 23,
                'name' => 'Rosario de Perijá'
            ],
            [
                'id' => 457,
                'state_id' => 23,
                'name' => 'San Francisco'
            ],
            [
                'id' => 458,
                'state_id' => 23,
                'name' => 'Santa Rita'
            ],
            [
                'id' => 459,
                'state_id' => 23,
                'name' => 'Simón Bolívar'
            ],
            [
                'id' => 460,
                'state_id' => 23,
                'name' => 'Sucre'
            ],
            [
                'id' => 461,
                'state_id' => 23,
                'name' => 'Valmore Rodríguez'
            ],
            [
                'id' => 462,
                'state_id' => 24,
                'name' => 'Libertador'
            ],
            [
                'id' => 463,
                'state_id' => 25,
                'name' => 'Alto Orinoco'
            ],
            [
                'id' => 464,
                'state_id' => 25,
                'name' => 'Alto Orinoco'
            ]
        ];
        Municipality::insert($municipalities);
    }
}
