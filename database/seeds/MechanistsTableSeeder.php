<?php

use Illuminate\Database\Seeder;
use Shed\Entities\Mechanist;


class MechanistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mechanist::truncate();

        factory(Mechanist::class, 30)
            ->create()
            ->each(function ($u) {
                $u;
            });
    }
}
