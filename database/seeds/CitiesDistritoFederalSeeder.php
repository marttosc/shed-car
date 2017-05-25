<?php

use Illuminate\Database\Seeder;

class CitiesDistritoFederalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Brasília', 'state' => 'DF'],
        ]);

        $this->command->info('Distrito Federal cities imported!');
    }
}
