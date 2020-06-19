<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
			 array(
			   'name' => 'Fashion',
			   'image_url' => 'fashion.png',
			 ),
			 array(
			   'name' => 'Electronics & Gadgets',
			   'image_url' => 'electronics.png',
			 ),
			 array(
			   'name' => 'Food',
			   'image_url' => 'food.png',
			 ),
			 array(
			   'name' => 'Sports',
			   'image_url' => 'sports.png',
			 ),
			 array(
			   'name' => 'Books',
			   'image_url' => 'books.png',
			 ),
			 array(
			   'name' => 'Furniture',
			   'image_url' => 'furniture.png',
			 ),
			 array(
			   'name' => 'Automotive',
			   'image_url' => 'automotive.png',
			 ),
		));
    }
}
