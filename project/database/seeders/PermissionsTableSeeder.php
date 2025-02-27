<?php
namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
      
        $permissionIds = [];
        $permissions = [
            'manage_users' => 'Gérer les utilisateurs',
            'manage_candidats' => 'Gérer les candidats',
            'view_dashboard' => 'Voir le tableau de bord',
            'upload_documents' => 'Télécharger des documents',
            'pass_quiz' => 'Passer le quiz',
        ];
        
        foreach ($permissions as $id => $name) {
            Permission::create(['id' => $id]);
            $permissionIds[$id] = $id;
        }
        
        
        $adminRole = Role::where('name', 'Administrateur')->first();
        $candidatRole = Role::where('name', 'Candidat')->first();
        $staffRole = Role::where('name', 'Staff')->first();
        
       
        $adminRole->permissions()->attach(array_values($permissionIds));
        
        $candidatPermissions = [
            $permissionIds['upload_documents'],
            $permissionIds['pass_quiz']
        ];
        $candidatRole->permissions()->attach($candidatPermissions);
        
        $staffPermissions = [
            $permissionIds['view_dashboard'],
            $permissionIds['manage_candidats']
        ];
        $staffRole->permissions()->attach($staffPermissions);
    }
}