<?php

use Illuminate\Database\Seeder;

class CitiesRondoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Alta Floresta d`Oeste', 'state' => 'RO'],
            ['city' => 'Alto Alegre dos Parecis', 'state' => 'RO'],
            ['city' => 'Alto Paraíso', 'state' => 'RO'],
            ['city' => 'Alvorada d`Oeste', 'state' => 'RO'],
            ['city' => 'Ariquemes', 'state' => 'RO'],
            ['city' => 'Buritis', 'state' => 'RO'],
            ['city' => 'Cabixi', 'state' => 'RO'],
            ['city' => 'Cacaulândia', 'state' => 'RO'],
            ['city' => 'Cacoal', 'state' => 'RO'],
            ['city' => 'Campo Novo de Rondônia', 'state' => 'RO'],
            ['city' => 'Candeias do Jamari', 'state' => 'RO'],
            ['city' => 'Castanheiras', 'state' => 'RO'],
            ['city' => 'Cerejeiras', 'state' => 'RO'],
            ['city' => 'Chupinguaia', 'state' => 'RO'],
            ['city' => 'Colorado do Oeste', 'state' => 'RO'],
            ['city' => 'Corumbiara', 'state' => 'RO'],
            ['city' => 'Costa Marques', 'state' => 'RO'],
            ['city' => 'Cujubim', 'state' => 'RO'],
            ['city' => 'Espigão d`Oeste', 'state' => 'RO'],
            ['city' => 'Governador Jorge Teixeira', 'state' => 'RO'],
            ['city' => 'Guajará-Mirim', 'state' => 'RO'],
            ['city' => 'Itapuã do Oeste', 'state' => 'RO'],
            ['city' => 'Jaru', 'state' => 'RO'],
            ['city' => 'Ji-Paraná', 'state' => 'RO'],
            ['city' => 'Machadinho d`Oeste', 'state' => 'RO'],
            ['city' => 'Ministro Andreazza', 'state' => 'RO'],
            ['city' => 'Mirante da Serra', 'state' => 'RO'],
            ['city' => 'Monte Negro', 'state' => 'RO'],
            ['city' => 'Nova Brasilândia d`Oeste', 'state' => 'RO'],
            ['city' => 'Nova Mamoré', 'state' => 'RO'],
            ['city' => 'Nova União', 'state' => 'RO'],
            ['city' => 'Novo Horizonte do Oeste', 'state' => 'RO'],
            ['city' => 'Ouro Preto do Oeste', 'state' => 'RO'],
            ['city' => 'Parecis', 'state' => 'RO'],
            ['city' => 'Pimenta Bueno', 'state' => 'RO'],
            ['city' => 'Pimenteiras do Oeste', 'state' => 'RO'],
            ['city' => 'Porto Velho', 'state' => 'RO'],
            ['city' => 'Presidente Médici', 'state' => 'RO'],
            ['city' => 'Primavera de Rondônia', 'state' => 'RO'],
            ['city' => 'Rio Crespo', 'state' => 'RO'],
            ['city' => 'Rolim de Moura', 'state' => 'RO'],
            ['city' => 'Santa Luzia d`Oeste', 'state' => 'RO'],
            ['city' => 'São Felipe d`Oeste', 'state' => 'RO'],
            ['city' => 'São Francisco do Guaporé', 'state' => 'RO'],
            ['city' => 'São Miguel do Guaporé', 'state' => 'RO'],
            ['city' => 'Seringueiras', 'state' => 'RO'],
            ['city' => 'Teixeirópolis', 'state' => 'RO'],
            ['city' => 'Theobroma', 'state' => 'RO'],
            ['city' => 'Urupá', 'state' => 'RO'],
            ['city' => 'Vale do Anari', 'state' => 'RO'],
            ['city' => 'Vale do Paraíso', 'state' => 'RO'],
            ['city' => 'Vilhena', 'state' => 'RO'],
        ]);

        $this->command->info('Rondonia cities imported!');
    }
}
