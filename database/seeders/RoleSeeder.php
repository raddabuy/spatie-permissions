<?php

namespace Database\Seeders;

use App\Constants\RoleConst;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                [
                    'name' => RoleConst::WRITER,
                    'guard_name' => 'web'
                ],
                [
                    'name' => RoleConst::EDITOR,
                    'guard_name' => 'web'
                ],
                [
                    'name' => RoleConst::ADMIN,
                    'guard_name' => 'web'
                ],
                [
                    'name' => RoleConst::PUBLISHER,
                    'guard_name' => 'web'
                ],
            ],
        );
    }
}
