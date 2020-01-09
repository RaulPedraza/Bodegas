<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<10;$i++){
            DB::table('bodegas')->insert([
                'nombre' => $faker->company,
                'direccion' => $faker->address,
                'email' => $faker->email,
                'telefono' => $faker->phoneNumber,
                'contacto' => $faker->name('male'|'female'),
                'añoFundacion' => $faker->year($max = 'now') ,
                'informacion' => $faker->realText(50,2),
                'restaurante' => 'Si',
                'hotel' => 'No'

            ]);
        }
        /*for($i=0;$i<10;$i++){
            DB::table('vinos')->insert([
                'nombre' => $faker->name('male'|'female'),
                'descripcion' => $faker->realText(50,2),
                'año' => $faker->year($max = 'now') ,
                'alcohol' => $faker->numberBetween(0,100),
                'tipo' => 'Tinto',
                'bodega_id' => $faker->numberBetween(1-10)
            ]);
        }*/
    }
}
