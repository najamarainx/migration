<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OrderFulfillmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryData = [
            ['id' => '1', 'name' => 'Category', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '2', 'name' => 'Permission', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '3', 'name' => 'Role', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '4', 'name' => 'User', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ];

        DB::table('orderfulfillment_categories')->insert($categoryData);
    }
}
