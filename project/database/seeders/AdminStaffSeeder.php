<?php
namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminStaffSeeder extends Seeder
{
    public function run()
    {
       
        $adminRole = Role::where('name', 'Administrateur')->first();
        $staffRole = Role::where('name', 'Staff')->first();
        
        if (!$adminRole || !$staffRole) {
            $this->command->error('Les rôles requis n\'existent pas. Exécutez d\'abord RolesTableSeeder.');
            return;
        }
        
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Système',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role_id' => $adminRole->id,
        ]);
        
     
        User::create([
            'first_name' => 'Staff',
            'last_name' => 'Support',
            'email' => 'staff@example.com',
            'password' => Hash::make('password123'),
            'role_id' => $staffRole->id,
        ]);
        
        $this->command->info('Utilisateurs admin et staff créés avec succès !');
    }
}