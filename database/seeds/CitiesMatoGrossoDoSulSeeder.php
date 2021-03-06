<?php

use Illuminate\Database\Seeder;

class CitiesMatoGrossoDoSulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Água Clara', 'state' => 'MS'],
            ['city' => 'Alcinópolis', 'state' => 'MS'],
            ['city' => 'Amambaí', 'state' => 'MS'],
            ['city' => 'Anastácio', 'state' => 'MS'],
            ['city' => 'Anaurilândia', 'state' => 'MS'],
            ['city' => 'Angélica', 'state' => 'MS'],
            ['city' => 'Antônio João', 'state' => 'MS'],
            ['city' => 'Aparecida do Taboado', 'state' => 'MS'],
            ['city' => 'Aquidauana', 'state' => 'MS'],
            ['city' => 'Aral Moreira', 'state' => 'MS'],
            ['city' => 'Bandeirantes', 'state' => 'MS'],
            ['city' => 'Bataguassu', 'state' => 'MS'],
            ['city' => 'Bataiporã', 'state' => 'MS'],
            ['city' => 'Bela Vista', 'state' => 'MS'],
            ['city' => 'Bodoquena', 'state' => 'MS'],
            ['city' => 'Bonito', 'state' => 'MS'],
            ['city' => 'Brasilândia', 'state' => 'MS'],
            ['city' => 'Caarapó', 'state' => 'MS'],
            ['city' => 'Camapuã', 'state' => 'MS'],
            ['city' => 'Campo Grande', 'state' => 'MS'],
            ['city' => 'Caracol', 'state' => 'MS'],
            ['city' => 'Cassilândia', 'state' => 'MS'],
            ['city' => 'Chapadão do Sul', 'state' => 'MS'],
            ['city' => 'Corguinho', 'state' => 'MS'],
            ['city' => 'Coronel Sapucaia', 'state' => 'MS'],
            ['city' => 'Corumbá', 'state' => 'MS'],
            ['city' => 'Costa Rica', 'state' => 'MS'],
            ['city' => 'Coxim', 'state' => 'MS'],
            ['city' => 'Deodápolis', 'state' => 'MS'],
            ['city' => 'Dois Irmãos do Buriti', 'state' => 'MS'],
            ['city' => 'Douradina', 'state' => 'MS'],
            ['city' => 'Dourados', 'state' => 'MS'],
            ['city' => 'Eldorado', 'state' => 'MS'],
            ['city' => 'Fátima do Sul', 'state' => 'MS'],
            ['city' => 'Figueirão', 'state' => 'MS'],
            ['city' => 'Glória de Dourados', 'state' => 'MS'],
            ['city' => 'Guia Lopes da Laguna', 'state' => 'MS'],
            ['city' => 'Iguatemi', 'state' => 'MS'],
            ['city' => 'Inocência', 'state' => 'MS'],
            ['city' => 'Itaporã', 'state' => 'MS'],
            ['city' => 'Itaquiraí', 'state' => 'MS'],
            ['city' => 'Ivinhema', 'state' => 'MS'],
            ['city' => 'Japorã', 'state' => 'MS'],
            ['city' => 'Jaraguari', 'state' => 'MS'],
            ['city' => 'Jardim', 'state' => 'MS'],
            ['city' => 'Jateí', 'state' => 'MS'],
            ['city' => 'Juti', 'state' => 'MS'],
            ['city' => 'Ladário', 'state' => 'MS'],
            ['city' => 'Laguna Carapã', 'state' => 'MS'],
            ['city' => 'Maracaju', 'state' => 'MS'],
            ['city' => 'Miranda', 'state' => 'MS'],
            ['city' => 'Mundo Novo', 'state' => 'MS'],
            ['city' => 'Naviraí', 'state' => 'MS'],
            ['city' => 'Nioaque', 'state' => 'MS'],
            ['city' => 'Nova Alvorada do Sul', 'state' => 'MS'],
            ['city' => 'Nova Andradina', 'state' => 'MS'],
            ['city' => 'Novo Horizonte do Sul', 'state' => 'MS'],
            ['city' => 'Paranaíba', 'state' => 'MS'],
            ['city' => 'Paranhos', 'state' => 'MS'],
            ['city' => 'Pedro Gomes', 'state' => 'MS'],
            ['city' => 'Ponta Porã', 'state' => 'MS'],
            ['city' => 'Porto Murtinho', 'state' => 'MS'],
            ['city' => 'Ribas do Rio Pardo', 'state' => 'MS'],
            ['city' => 'Rio Brilhante', 'state' => 'MS'],
            ['city' => 'Rio Negro', 'state' => 'MS'],
            ['city' => 'Rio Verde de Mato Grosso', 'state' => 'MS'],
            ['city' => 'Rochedo', 'state' => 'MS'],
            ['city' => 'Santa Rita do Pardo', 'state' => 'MS'],
            ['city' => 'São Gabriel do Oeste', 'state' => 'MS'],
            ['city' => 'Selvíria', 'state' => 'MS'],
            ['city' => 'Sete Quedas', 'state' => 'MS'],
            ['city' => 'Sidrolândia', 'state' => 'MS'],
            ['city' => 'Sonora', 'state' => 'MS'],
            ['city' => 'Tacuru', 'state' => 'MS'],
            ['city' => 'Taquarussu', 'state' => 'MS'],
            ['city' => 'Terenos', 'state' => 'MS'],
            ['city' => 'Três Lagoas', 'state' => 'MS'],
            ['city' => 'Vicentina', 'state' => 'MS'],
        ]);

        $this->command->info('Mato Grosso do Sul cities imported!');
    }
}
