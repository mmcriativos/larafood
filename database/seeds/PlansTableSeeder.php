<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Plano Iniciante',
            'url' => 'plano-iniciante',
            'price' => 120.00,
            'description' => 'Plano Teste',
        ]);
    }
}
