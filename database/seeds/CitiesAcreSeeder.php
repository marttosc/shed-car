<?php

use Illuminate\Database\Seeder;

class CitiesAcreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Acrelândia', 'state' => 'AC'],
            ['city' => 'Assis Brasil', 'state' => 'AC'],
            ['city' => 'Brasiléia', 'state' => 'AC'],
            ['city' => 'Bujari', 'state' => 'AC'],
            ['city' => 'Capixaba', 'state' => 'AC'],
            ['city' => 'Cruzeiro do Sul', 'state' => 'AC'],
            ['city' => 'Epitaciolândia', 'state' => 'AC'],
            ['city' => 'Feijó', 'state' => 'AC'],
            ['city' => 'Jordão', 'state' => 'AC'],
            ['city' => 'Mâncio Lima', 'state' => 'AC'],
            ['city' => 'Manoel Urbano', 'state' => 'AC'],
            ['city' => 'Marechal Thaumaturgo', 'state' => 'AC'],
            ['city' => 'Plácido de Castro', 'state' => 'AC'],
            ['city' => 'Porto Acre', 'state' => 'AC'],
            ['city' => 'Porto Walter', 'state' => 'AC'],
            ['city' => 'Rio Branco', 'state' => 'AC'],
            ['city' => 'Rodrigues Alves', 'state' => 'AC'],
            ['city' => 'Santa Rosa do Purus', 'state' => 'AC'],
            ['city' => 'Sena Madureira', 'state' => 'AC'],
            ['city' => 'Senador Guiomard', 'state' => 'AC'],
            ['city' => 'Tarauacá', 'state' => 'AC'],
            ['city' => 'Xapuri', 'state' => 'AC'],
        ]);

        $this->command->info('Acre cities imported!');
    }
}
