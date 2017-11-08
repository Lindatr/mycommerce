<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $id = DB::table('products')->insertGetId([
                'name' => 'Product ' . $i,
                'price' => (rand (10,90) * 10000),
                'tags' => '#newproduct',
                'description' => 'No Description',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        

        for ($j=0; $j < 3; $j++) { 
            DB::table('product_images')->insert(
            [
                'image' => '/product/image ' . $j,
                'productId' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

            DB::table('product_details')->insert(
            [
                'size' => 'S',
                'stock' => 5,
                'productId' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);


            DB::table('product_details')->insert(
            [
                'size' => 'M',
                'stock' => 5,
                'productId' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            DB::table('product_details')->insert(
            [
                'size' => 'L',
                'stock' => 5,
                'productId' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        }

        // $this->call(UsersTableSeeder::class);

    }
}
