<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderFulfillmentPermission;
use Carbon\Carbon;
use DB;

class OrderFulfillmentRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleData = [
            'id' => 1,
            'name' => 'Developer',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        OrderFulfillmentPermission::assignPermission($id);
        $roleData = [
            'id' => 2,
            'name' => 'Super Admin',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        OrderFulfillmentPermission::assignPermission($id);
        $roleData = [
            'id' => 3,
            'name' => 'Measurement',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 4,
            'name' =>'Production Manager',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 5,
            'name' => 'Team Lead',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 6,
            'name' => 'Screen',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 7,
            'name' => 'Worker',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 8,
            'name' => 'Assembler',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 9,
            'name' => 'Packaging',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 10,
            'name' => 'Installation',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        $roleData = [
            'id' => 11,
            'name' => 'Accountant',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);

    }
}
