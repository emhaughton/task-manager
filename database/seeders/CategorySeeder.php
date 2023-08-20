<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('category')->truncate();
        \DB::table('category')->insert(
            [
                [
                    'uuid' => Str::uuid(),
                    'name' => 'PHP'
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'JS'
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'CSS'
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'Otros'
                ],
            ]
        );
    }
}
