<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Communities' => [
                'Armenian',
                'Russian',
                'USA',
                'British',
                'Scottish'
            ],
            'Age group' => [
                '11-20',
                '21-30',
                '31-40',
                '41-50',
                '51-60',
                '61-70',
                '70+'
            ],
            'Reaction' => [
                'Excellent',
                'Great',
                'Good',
                'Neutral',
                'Angry'
            ],
            'Gender' => [
                'Male',
                'Female',
            ],
            'Unemployment' => [
                'Employed',
                'Unemployed',
            ],
            'Time' => [
                'Attention',
                'Dwell',
            ]
        ];

        foreach ($categories as $key => $subCategories) {

            DB::table('categories')->insert([
                'name' => $key,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $category = Category::query()->where('name', $key)->first();

            foreach ($subCategories as $k => $subCategory) {
                DB::table('categories')->insert([
                        'name' => $subCategory,
                        'parent_id' => $category->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
            }
        }
    }
}
