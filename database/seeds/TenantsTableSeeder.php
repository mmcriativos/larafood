<?php

use App\Models\{
    Plan,
    Tenant
};
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj' => '17455208000106',
            'name' => 'MM Criativos',
            'url' => 'mmcriativos',
            'email' => 'matheus@mmcriativos.com.br',
        ]);
    }
}
