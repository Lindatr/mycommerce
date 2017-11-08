<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $category_list = DB::select('select categoryName, categoryImage from categories');
    
    // for($i = 1; $i <= 10; $i++){
    //     $obj = new stdClass;
    //     $obj->category_name = "Category " . $i;

    //     array_push($category_list, $obj);
    // }

    return view('home', ["categories" => $category_list]);

});

Route::group(['prefix' => 'products'], function() {
    Route::get('/all', function () {
        return view('product.product-many');
    });
    Route::get('/detail/{id?}', function ($id) {

    //$product = DB::select('select * from products where id = ?'. [$id]);
    
     $product = DB::table('products')
                ->where('id' ,'=', $id)
                ->first();

    $productDetails = DB::table('product_details')
                ->where('productId' ,'=', $id)
                ->get();

    $productImages = DB::table('product_images')
                ->where('productId' ,'=', $id)
                ->get();

        return view('product.product-single' ,["p" =>$product, 'pd'=> $productDetails, 'pi'=>$productImages]);
    
    });
    Route::get('/bycategory', function () {
        return view('product.product-many');
    });
});

Route::group(['prefix' => 'orders'], function() {
    Route::post('/addtocart', function () {
        
        $product_id = Illuminate\Support\Facades\Request::input ('product_id');
        $product_details_id = lluminate\Support\Facades\Request::input ('product_details_id');
        // DB::insert("
        //     insert into orders(code, orderDate, deliveryOption, total) 
        //     values (''. uniqid(). ''. NOW().''.0)
        //     "); 

      $order = DB::table('orders')
        ->where('status'), '=', 0)
        ->first();

        if(empty($order)){
       $order_id =  DB::table('orders')->insertGetId(
            [
                "code" =>uniqid(),
                "orderDate" => new \DateTime(),
                "deliveryOption" =>"",
                "total"=>0,
            ]
        );
   }

   else
    $order_id =$order->id;

       $product = DB::table ('products')
       ->where('id', "=", $product_id)
       ->first();

       DB::table('order_detail')->insert(
        [
            'orderId' => $order_id,
            'productDetailsId' => $product_details_id,
            'qty' =>1, 
            'price' => $product->price,
        ]
       );


        return $product_details_id;
    });

    Route::get('/addtocart', function () {
        return view('order.cart');
    });

    Route::get('/checkout', function () {
        return view('order.checkout');
    });

    Route::post('/checkout', function () {
        return view('order.checkout');
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
