<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('status')->truncate();
        \DB::table('status')->insert(
            [
                [
                    'uuid' => Str::uuid(),
                    'name' => 'To do'
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'In progress'
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'Completed'
                ]
            ]
        );
    }
}
