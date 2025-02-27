<?php
namespace 
Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    // public function run()
    // {
    //     Role::create(['id' => 'admin', 'name' => 'Administrateur']);
    //     Role::create(['id' => 'candidat', 'name' => 'Candidat']);
    //     Role::create(['id' => 'staff', 'name' => 'Staff']);
    // }

    public function run()
    {
        Role::create(['name' => 'Administrateur']);
        Role::create(['name' => 'Candidat']);
        Role::create(['name' => 'Staff']);
    }
}