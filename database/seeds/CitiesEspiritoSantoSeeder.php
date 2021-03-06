<?php

use Illuminate\Database\Seeder;

class CitiesEspiritoSantoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Afonso Cláudio', 'state' => 'ES'],
            ['city' => 'Água Doce do Norte', 'state' => 'ES'],
            ['city' => 'Águia Branca', 'state' => 'ES'],
            ['city' => 'Alegre', 'state' => 'ES'],
            ['city' => 'Alfredo Chaves', 'state' => 'ES'],
            ['city' => 'Alto Rio Novo', 'state' => 'ES'],
            ['city' => 'Anchieta', 'state' => 'ES'],
            ['city' => 'Apiacá', 'state' => 'ES'],
            ['city' => 'Aracruz', 'state' => 'ES'],
            ['city' => 'Atilio Vivacqua', 'state' => 'ES'],
            ['city' => 'Baixo Guandu', 'state' => 'ES'],
            ['city' => 'Barra de São Francisco', 'state' => 'ES'],
            ['city' => 'Boa Esperança', 'state' => 'ES'],
            ['city' => 'Bom Jesus do Norte', 'state' => 'ES'],
            ['city' => 'Brejetuba', 'state' => 'ES'],
            ['city' => 'Cachoeiro de Itapemirim', 'state' => 'ES'],
            ['city' => 'Cariacica', 'state' => 'ES'],
            ['city' => 'Castelo', 'state' => 'ES'],
            ['city' => 'Colatina', 'state' => 'ES'],
            ['city' => 'Conceição da Barra', 'state' => 'ES'],
            ['city' => 'Conceição do Castelo', 'state' => 'ES'],
            ['city' => 'Divino de São Lourenço', 'state' => 'ES'],
            ['city' => 'Domingos Martins', 'state' => 'ES'],
            ['city' => 'Dores do Rio Preto', 'state' => 'ES'],
            ['city' => 'Ecoporanga', 'state' => 'ES'],
            ['city' => 'Fundão', 'state' => 'ES'],
            ['city' => 'Governador Lindenberg', 'state' => 'ES'],
            ['city' => 'Guaçuí', 'state' => 'ES'],
            ['city' => 'Guarapari', 'state' => 'ES'],
            ['city' => 'Ibatiba', 'state' => 'ES'],
            ['city' => 'Ibiraçu', 'state' => 'ES'],
            ['city' => 'Ibitirama', 'state' => 'ES'],
            ['city' => 'Iconha', 'state' => 'ES'],
            ['city' => 'Irupi', 'state' => 'ES'],
            ['city' => 'Itaguaçu', 'state' => 'ES'],
            ['city' => 'Itapemirim', 'state' => 'ES'],
            ['city' => 'Itarana', 'state' => 'ES'],
            ['city' => 'Iúna', 'state' => 'ES'],
            ['city' => 'Jaguaré', 'state' => 'ES'],
            ['city' => 'Jerônimo Monteiro', 'state' => 'ES'],
            ['city' => 'João Neiva', 'state' => 'ES'],
            ['city' => 'Laranja da Terra', 'state' => 'ES'],
            ['city' => 'Linhares', 'state' => 'ES'],
            ['city' => 'Mantenópolis', 'state' => 'ES'],
            ['city' => 'Marataízes', 'state' => 'ES'],
            ['city' => 'Marechal Floriano', 'state' => 'ES'],
            ['city' => 'Marilândia', 'state' => 'ES'],
            ['city' => 'Mimoso do Sul', 'state' => 'ES'],
            ['city' => 'Montanha', 'state' => 'ES'],
            ['city' => 'Mucurici', 'state' => 'ES'],
            ['city' => 'Muniz Freire', 'state' => 'ES'],
            ['city' => 'Muqui', 'state' => 'ES'],
            ['city' => 'Nova Venécia', 'state' => 'ES'],
            ['city' => 'Pancas', 'state' => 'ES'],
            ['city' => 'Pedro Canário', 'state' => 'ES'],
            ['city' => 'Pinheiros', 'state' => 'ES'],
            ['city' => 'Piúma', 'state' => 'ES'],
            ['city' => 'Ponto Belo', 'state' => 'ES'],
            ['city' => 'Presidente Kennedy', 'state' => 'ES'],
            ['city' => 'Rio Bananal', 'state' => 'ES'],
            ['city' => 'Rio Novo do Sul', 'state' => 'ES'],
            ['city' => 'Santa Leopoldina', 'state' => 'ES'],
            ['city' => 'Santa Maria de Jetibá', 'state' => 'ES'],
            ['city' => 'Santa Teresa', 'state' => 'ES'],
            ['city' => 'São Domingos do Norte', 'state' => 'ES'],
            ['city' => 'São Gabriel da Palha', 'state' => 'ES'],
            ['city' => 'São José do Calçado', 'state' => 'ES'],
            ['city' => 'São Mateus', 'state' => 'ES'],
            ['city' => 'São Roque do Canaã', 'state' => 'ES'],
            ['city' => 'Serra', 'state' => 'ES'],
            ['city' => 'Sooretama', 'state' => 'ES'],
            ['city' => 'Vargem Alta', 'state' => 'ES'],
            ['city' => 'Venda Nova do Imigrante', 'state' => 'ES'],
            ['city' => 'Viana', 'state' => 'ES'],
            ['city' => 'Vila Pavão', 'state' => 'ES'],
            ['city' => 'Vila Valério', 'state' => 'ES'],
            ['city' => 'Vila Velha', 'state' => 'ES'],
            ['city' => 'Vitória', 'state' => 'ES'],
        ]);

        $this->command->info('Espirito Santo cities imported!');
    }
}
