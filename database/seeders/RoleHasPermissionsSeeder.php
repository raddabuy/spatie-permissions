<?php

namespace Database\Seeders;

use App\Constants\PermissionConst;
use App\Constants\RoleConst;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', RoleConst::WRITER)->first();
        $role->givePermissionTo(PermissionConst::CANWRITERPOST);

        $role = Role::where('name', RoleConst::EDITOR)->first();
        $role->givePermissionTo(PermissionConst::CANEDITPOST);

        $role = Role::where('name', RoleConst::PUBLISHER)->first();
        $role->givePermissionTo(PermissionConst::CANPUBLISHPOST);

        $role = Role::where('name', RoleConst::ADMIN)->first();
        $role->syncPermissions([PermissionConst::CANWRITERPOST,
                                PermissionConst::CANEDITPOST,
                                PermissionConst::CANPUBLISHPOST]);

    }
}
