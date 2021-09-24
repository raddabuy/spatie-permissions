<?php

namespace Database\Seeders;

use App\Constants\PermissionConst;
use App\Constants\RoleConst;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            [
                [
                    'name' => PermissionConst::CANWRITERPOST,
                    'guard_name' => 'web'
                ],
                [
                    'name' => PermissionConst::CANEDITPOST,
                    'guard_name' => 'web'
                ],
                [
                    'name' => PermissionConst::CANPUBLISHPOST,
                    'guard_name' => 'web'
                ],
            ],
        );
    }
}
