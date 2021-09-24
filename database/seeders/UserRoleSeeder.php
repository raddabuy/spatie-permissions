<?php

namespace Database\Seeders;

use App\Constants\RoleConst;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::whereId(1)->first();
        $user->assignRole(RoleConst::WRITER);

        $user = User::whereId(2)->first();
        $user->assignRole(RoleConst::EDITOR);

        $user = User::whereId(3)->first();
        $user->assignRole(RoleConst::PUBLISHER);

        $user = User::whereId(4)->first();
        $user->assignRole(RoleConst::ADMIN);

    }
}
