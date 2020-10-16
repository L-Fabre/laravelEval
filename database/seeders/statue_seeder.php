<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statue_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statues')->insert([
            [
                'name' => 'Statue de la Liberté',
                'creation_date' => '28 octobre 1886',
                'origin' => 'New York',
                'price' => 'inestimable',
                'artist_name' => 'Auguste Bartholdi, Richard Morris Hunt', 
            ],

            [
                'name' => 'Vénus de Milo',
                'creation_date' => '1820',
                'origin' => 'Milos',
                'price' => 'inestimable',
                'artist_name' => 'Alexandros d\'Antioche', 
            ],

            [
                'name' => 'Christ rédempteur',
                'creation_date' => '4 avril 1922',
                'origin' => 'Rio de Janeiro',
                'price' => 'inestimable',
                'artist_name' => 'Heitor da Silva Costa', 
            ],
        ]);
    }
}