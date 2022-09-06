<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'unpublish posts']);

        //create roles and assign existing permissions
        $basicuser = Role::create(['name' => 'writer']);
        $basicuser->givePermissionTo('view posts');
        $basicuser->givePermissionTo('create posts');
        $basicuser->givePermissionTo('edit posts');
        $basicuser->givePermissionTo('delete posts');

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('view posts');
        $adminRole->givePermissionTo('create posts');
        $adminRole->givePermissionTo('edit posts');
        $adminRole->givePermissionTo('delete posts');
        $adminRole->givePermissionTo('publish posts');
        $adminRole->givePermissionTo('unpublish posts');

        $superadminRole = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule

        // create demo users
        $user = Information::factory()->create([
            'name' => 'Example user',
            'email' => 'user@oke.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($basicuser);

        $user = Information::factory()->create([
            'name' => 'Gardener user',
            'email' => 'gardener@oke.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($superadminRole);

        $user = Information::factory()->create([
            'name' => 'Designer user',
            'email' => 'designer@oke.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($superadminRole);
    }
}
