<?php

namespace Alirezakohandani\Dvision\Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionsDatabaseSeeder extends Seeder
{
    /**
     * run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DivisionsTableSeeder::class);
    }
}
