<?php

use Illuminate\Database\Seeder;

class CitiesAmazonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Alvarães', 'state' => 'AM'],
            ['city' => 'Amaturá', 'state' => 'AM'],
            ['city' => 'Anamã', 'state' => 'AM'],
            ['city' => 'Anori', 'state' => 'AM'],
            ['city' => 'Apuí', 'state' => 'AM'],
            ['city' => 'Atalaia do Norte', 'state' => 'AM'],
            ['city' => 'Autazes', 'state' => 'AM'],
            ['city' => 'Barcelos', 'state' => 'AM'],
            ['city' => 'Barreirinha', 'state' => 'AM'],
            ['city' => 'Benjamin Constant', 'state' => 'AM'],
            ['city' => 'Beruri', 'state' => 'AM'],
            ['city' => 'Boa Vista do Ramos', 'state' => 'AM'],
            ['city' => 'Boca do Acre', 'state' => 'AM'],
            ['city' => 'Borba', 'state' => 'AM'],
            ['city' => 'Caapiranga', 'state' => 'AM'],
            ['city' => 'Canutama', 'state' => 'AM'],
            ['city' => 'Carauari', 'state' => 'AM'],
            ['city' => 'Careiro', 'state' => 'AM'],
            ['city' => 'Careiro da Várzea', 'state' => 'AM'],
            ['city' => 'Coari', 'state' => 'AM'],
            ['city' => 'Codajás', 'state' => 'AM'],
            ['city' => 'Eirunepé', 'state' => 'AM'],
            ['city' => 'Envira', 'state' => 'AM'],
            ['city' => 'Fonte Boa', 'state' => 'AM'],
            ['city' => 'Guajará', 'state' => 'AM'],
            ['city' => 'Humaitá', 'state' => 'AM'],
            ['city' => 'Ipixuna', 'state' => 'AM'],
            ['city' => 'Iranduba', 'state' => 'AM'],
            ['city' => 'Itacoatiara', 'state' => 'AM'],
            ['city' => 'Itamarati', 'state' => 'AM'],
            ['city' => 'Itapiranga', 'state' => 'AM'],
            ['city' => 'Japurá', 'state' => 'AM'],
            ['city' => 'Juruá', 'state' => 'AM'],
            ['city' => 'Jutaí', 'state' => 'AM'],
            ['city' => 'Lábrea', 'state' => 'AM'],
            ['city' => 'Manacapuru', 'state' => 'AM'],
            ['city' => 'Manaquiri', 'state' => 'AM'],
            ['city' => 'Manaus', 'state' => 'AM'],
            ['city' => 'Manicoré', 'state' => 'AM'],
            ['city' => 'Maraã', 'state' => 'AM'],
            ['city' => 'Maués', 'state' => 'AM'],
            ['city' => 'Nhamundá', 'state' => 'AM'],
            ['city' => 'Nova Olinda do Norte', 'state' => 'AM'],
            ['city' => 'Novo Airão', 'state' => 'AM'],
            ['city' => 'Novo Aripuanã', 'state' => 'AM'],
            ['city' => 'Parintins', 'state' => 'AM'],
            ['city' => 'Pauini', 'state' => 'AM'],
            ['city' => 'Presidente Figueiredo', 'state' => 'AM'],
            ['city' => 'Rio Preto da Eva', 'state' => 'AM'],
            ['city' => 'Santa Isabel do Rio Negro', 'state' => 'AM'],
            ['city' => 'Santo Antônio do Içá', 'state' => 'AM'],
            ['city' => 'São Gabriel da Cachoeira', 'state' => 'AM'],
            ['city' => 'São Paulo de Olivença', 'state' => 'AM'],
            ['city' => 'São Sebastião do Uatumã', 'state' => 'AM'],
            ['city' => 'Silves', 'state' => 'AM'],
            ['city' => 'Tabatinga', 'state' => 'AM'],
            ['city' => 'Tapauá', 'state' => 'AM'],
            ['city' => 'Tefé', 'state' => 'AM'],
            ['city' => 'Tonantins', 'state' => 'AM'],
            ['city' => 'Uarini', 'state' => 'AM'],
            ['city' => 'Urucará', 'state' => 'AM'],
            ['city' => 'Urucurituba', 'state' => 'AM'],
        ]);

        $this->command->info('Amazonas cities imported!');
    }
}
