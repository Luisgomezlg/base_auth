<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Maximillian Legado',
            'email' => 'luiseduar1997@gmail.com',
            'password' => bcrypt('holamundo')
        ])->assignRole('Admin');
        User::factory(9)->create();
    }
}
