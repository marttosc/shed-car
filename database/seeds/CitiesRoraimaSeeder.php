<?php

use Illuminate\Database\Seeder;

class CitiesRoraimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Alto Alegre', 'state' => 'RR'],
            ['city' => 'Amajari', 'state' => 'RR'],
            ['city' => 'Boa Vista', 'state' => 'RR'],
            ['city' => 'Bonfim', 'state' => 'RR'],
            ['city' => 'Cantá', 'state' => 'RR'],
            ['city' => 'Caracaraí', 'state' => 'RR'],
            ['city' => 'Caroebe', 'state' => 'RR'],
            ['city' => 'Iracema', 'state' => 'RR'],
            ['city' => 'Mucajaí', 'state' => 'RR'],
            ['city' => 'Normandia', 'state' => 'RR'],
            ['city' => 'Pacaraima', 'state' => 'RR'],
            ['city' => 'Rorainópolis', 'state' => 'RR'],
            ['city' => 'São João da Baliza', 'state' => 'RR'],
            ['city' => 'São Luiz', 'state' => 'RR'],
            ['city' => 'Uiramutã', 'state' => 'RR'],
        ]);

        $this->command->info('Roraima cities imported!');
    }
}
