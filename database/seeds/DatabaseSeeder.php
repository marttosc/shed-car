<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // States
        $this->call(StatesTableSeeder::class);

        // Cities
        $this->call(CitiesAcreSeeder::class);
        $this->call(CitiesAlagoasSeeder::class);
        $this->call(CitiesAmapaSeeder::class);
        $this->call(CitiesAmazonasSeeder::class);
        $this->call(CitiesBahiaSeeder::class);
        $this->call(CitiesCearaSeeder::class);
        $this->call(CitiesDistritoFederalSeeder::class);
        $this->call(CitiesEspiritoSantoSeeder::class);
        $this->call(CitiesGoiasSeeder::class);
        $this->call(CitiesMaranhaoSeeder::class);
        $this->call(CitiesMatoGrossoSeeder::class);
        $this->call(CitiesMatoGrossoDoSulSeeder::class);
        $this->call(CitiesMinasGeraisSeeder::class);
        $this->call(CitiesParaSeeder::class);
        $this->call(CitiesParaibaSeeder::class);
        $this->call(CitiesParanaSeeder::class);
        $this->call(CitiesPernambucoSeeder::class);
        $this->call(CitiesPiauiSeeder::class);
        $this->call(CitiesRioDeJaneiroSeeder::class);
        $this->call(CitiesRioGrandeDoNorteSeeder::class);
        $this->call(CitiesRioGrandeDoSulSeeder::class);
        $this->call(CitiesRondoniaSeeder::class);
        $this->call(CitiesRoraimaSeeder::class);
        $this->call(CitiesSantaCatarinaSeeder::class);
        $this->call(CitiesSaoPauloSeeder::class);
        $this->call(CitiesSergipeSeeder::class);
        $this->call(CitiesTocantinsSeeder::class);
    }
}
