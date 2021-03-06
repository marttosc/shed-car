<?php

use Illuminate\Database\Seeder;

class CitiesSergipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Amparo de São Francisco', 'state' => 'SE'],
            ['city' => 'Aquidabã', 'state' => 'SE'],
            ['city' => 'Aracaju', 'state' => 'SE'],
            ['city' => 'Arauá', 'state' => 'SE'],
            ['city' => 'Areia Branca', 'state' => 'SE'],
            ['city' => 'Barra dos Coqueiros', 'state' => 'SE'],
            ['city' => 'Boquim', 'state' => 'SE'],
            ['city' => 'Brejo Grande', 'state' => 'SE'],
            ['city' => 'Campo do Brito', 'state' => 'SE'],
            ['city' => 'Canhoba', 'state' => 'SE'],
            ['city' => 'Canindé de São Francisco', 'state' => 'SE'],
            ['city' => 'Capela', 'state' => 'SE'],
            ['city' => 'Carira', 'state' => 'SE'],
            ['city' => 'Carmópolis', 'state' => 'SE'],
            ['city' => 'Cedro de São João', 'state' => 'SE'],
            ['city' => 'Cristinápolis', 'state' => 'SE'],
            ['city' => 'Cumbe', 'state' => 'SE'],
            ['city' => 'Divina Pastora', 'state' => 'SE'],
            ['city' => 'Estância', 'state' => 'SE'],
            ['city' => 'Feira Nova', 'state' => 'SE'],
            ['city' => 'Frei Paulo', 'state' => 'SE'],
            ['city' => 'Gararu', 'state' => 'SE'],
            ['city' => 'General Maynard', 'state' => 'SE'],
            ['city' => 'Gracho Cardoso', 'state' => 'SE'],
            ['city' => 'Ilha das Flores', 'state' => 'SE'],
            ['city' => 'Indiaroba', 'state' => 'SE'],
            ['city' => 'Itabaiana', 'state' => 'SE'],
            ['city' => 'Itabaianinha', 'state' => 'SE'],
            ['city' => 'Itabi', 'state' => 'SE'],
            ['city' => 'Itaporanga d`Ajuda', 'state' => 'SE'],
            ['city' => 'Japaratuba', 'state' => 'SE'],
            ['city' => 'Japoatã', 'state' => 'SE'],
            ['city' => 'Lagarto', 'state' => 'SE'],
            ['city' => 'Laranjeiras', 'state' => 'SE'],
            ['city' => 'Macambira', 'state' => 'SE'],
            ['city' => 'Malhada dos Bois', 'state' => 'SE'],
            ['city' => 'Malhador', 'state' => 'SE'],
            ['city' => 'Maruim', 'state' => 'SE'],
            ['city' => 'Moita Bonita', 'state' => 'SE'],
            ['city' => 'Monte Alegre de Sergipe', 'state' => 'SE'],
            ['city' => 'Muribeca', 'state' => 'SE'],
            ['city' => 'Neópolis', 'state' => 'SE'],
            ['city' => 'Nossa Senhora Aparecida', 'state' => 'SE'],
            ['city' => 'Nossa Senhora da Glória', 'state' => 'SE'],
            ['city' => 'Nossa Senhora das Dores', 'state' => 'SE'],
            ['city' => 'Nossa Senhora de Lourdes', 'state' => 'SE'],
            ['city' => 'Nossa Senhora do Socorro', 'state' => 'SE'],
            ['city' => 'Pacatuba', 'state' => 'SE'],
            ['city' => 'Pedra Mole', 'state' => 'SE'],
            ['city' => 'Pedrinhas', 'state' => 'SE'],
            ['city' => 'Pinhão', 'state' => 'SE'],
            ['city' => 'Pirambu', 'state' => 'SE'],
            ['city' => 'Poço Redondo', 'state' => 'SE'],
            ['city' => 'Poço Verde', 'state' => 'SE'],
            ['city' => 'Porto da Folha', 'state' => 'SE'],
            ['city' => 'Propriá', 'state' => 'SE'],
            ['city' => 'Riachão do Dantas', 'state' => 'SE'],
            ['city' => 'Riachuelo', 'state' => 'SE'],
            ['city' => 'Ribeirópolis', 'state' => 'SE'],
            ['city' => 'Rosário do Catete', 'state' => 'SE'],
            ['city' => 'Salgado', 'state' => 'SE'],
            ['city' => 'Santa Luzia do Itanhy', 'state' => 'SE'],
            ['city' => 'Santa Rosa de Lima', 'state' => 'SE'],
            ['city' => 'Santana do São Francisco', 'state' => 'SE'],
            ['city' => 'Santo Amaro das Brotas', 'state' => 'SE'],
            ['city' => 'São Cristóvão', 'state' => 'SE'],
            ['city' => 'São Domingos', 'state' => 'SE'],
            ['city' => 'São Francisco', 'state' => 'SE'],
            ['city' => 'São Miguel do Aleixo', 'state' => 'SE'],
            ['city' => 'Simão Dias', 'state' => 'SE'],
            ['city' => 'Siriri', 'state' => 'SE'],
            ['city' => 'Telha', 'state' => 'SE'],
            ['city' => 'Tobias Barreto', 'state' => 'SE'],
            ['city' => 'Tomar do Geru', 'state' => 'SE'],
            ['city' => 'Umbaúba', 'state' => 'SE'],
        ]);

        $this->command->info('Sergipe cities imported!');
    }
}
