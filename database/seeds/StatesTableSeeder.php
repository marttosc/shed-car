<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();

        DB::table('states')->insert([
            ['state' => 'Acre', 'uf' => 'AC'],
            ['state' => 'Alagoas', 'uf' => 'AL'],
            ['state' => 'Amapá', 'uf' => 'AP'],
            ['state' => 'Amazonas', 'uf' => 'AM'],
            ['state' => 'Bahia', 'uf' => 'BA'],
            ['state' => 'Ceará', 'uf' => 'CE'],
            ['state' => 'Distrito Federal', 'uf' => 'DF'],
            ['state' => 'Espírito Santo', 'uf' => 'ES'],
            ['state' => 'Goiás', 'uf' => 'GO'],
            ['state' => 'Maranhão', 'uf' => 'MA'],
            ['state' => 'Mato Grosso', 'uf' => 'MT'],
            ['state' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['state' => 'Minas Gerais', 'uf' => 'MG'],
            ['state' => 'Pará', 'uf' => 'PA'],
            ['state' => 'Paraíba', 'uf' => 'PB'],
            ['state' => 'Paraná', 'uf' => 'PR'],
            ['state' => 'Pernambuco', 'uf' => 'PE'],
            ['state' => 'Piauí', 'uf' => 'PI'],
            ['state' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['state' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['state' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['state' => 'Rondônia', 'uf' => 'RO'],
            ['state' => 'Roraima', 'uf' => 'RR'],
            ['state' => 'Santa Catarina', 'uf' => 'SC'],
            ['state' => 'São Paulo', 'uf' => 'SP'],
            ['state' => 'Sergipe', 'uf' => 'SE'],
            ['state' => 'Tocantins', 'uf' => 'TO'],
        ]);

        $this->command->info('Brazilian states imported!');
    }
}
