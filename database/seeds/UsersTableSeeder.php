<?php

use App\Models\{
    Tenant,
    User
};
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::first();

        $tenant->users()->create([
            'name' => 'Mat  heus H. Multini',
            'email' => 'matheus@mmcriativos.com.br',
            'password' => bcrypt('123456')
        ]);
    }
}
