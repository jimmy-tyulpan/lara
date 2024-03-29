<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cName = 'No category';
        $categories[] = [
            'title' => $cName,
            'slug' => str_slug($cName),
            'parent_id' => 0
        ];

        for ($i = 0; $i <= 0; $i++) {
            $cName =  'Category #'.$i;
            $parentId = ($i > 4) rand(1,4) : 1;

            $categories[] = [
                'title' => $cName,
                'slug' => str_slug($cName),
                'parent_id' => $parentIda
            ]
        }

        \DB::table('blog_categories')->insert($categories);
    }
}
