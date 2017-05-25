<?php

use Illuminate\Database\Seeder;

class CitiesAmapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Amapá', 'state' => 'AP'],
            ['city' => 'Calçoene', 'state' => 'AP'],
            ['city' => 'Cutias', 'state' => 'AP'],
            ['city' => 'Ferreira Gomes', 'state' => 'AP'],
            ['city' => 'Itaubal', 'state' => 'AP'],
            ['city' => 'Laranjal do Jari', 'state' => 'AP'],
            ['city' => 'Macapá', 'state' => 'AP'],
            ['city' => 'Mazagão', 'state' => 'AP'],
            ['city' => 'Oiapoque', 'state' => 'AP'],
            ['city' => 'Pedra Branca do Amaparí', 'state' => 'AP'],
            ['city' => 'Porto Grande', 'state' => 'AP'],
            ['city' => 'Pracuúba', 'state' => 'AP'],
            ['city' => 'Santana', 'state' => 'AP'],
            ['city' => 'Serra do Navio', 'state' => 'AP'],
            ['city' => 'Tartarugalzinho', 'state' => 'AP'],
            ['city' => 'Vitória do Jari', 'state' => 'AP'],
        ]);

        $this->command->info('Amapa cities imported!');
    }
}
