<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\PurchasedProduct;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function HomePage()
    {

        $products = Product::all();

        return view("site.index", compact("products"));
    }

    public function productdetails($slug)    
    {
        $product = Product::with('images')->where("slug", $slug)->first();
        // dd($product);
        if(!$product){

            abort(404);
        }

        return view("site.product-details", ["product"=> $product]);  
    }


    public function CartProduct()
    {

        return view("site.cart");
    }


    public function CheckoutDetails()
    {

        return view("site.checkout");
    }


    public function AddProductIntoCart(Request $request)
    {
        if (!auth()->check()) {

            return response()->json([
                "status" => "You are not Logged In , Please Logged in to continue",
            ], 401);
        }

        $product_id = $request->product_id;
        $product = Product::find($product_id);

        if (!$product) {

            return response()->json([

                "status" => "Unable to Find this product",
            ], 404);
        }



        if($product->quantity == 0 || $product->quantity == null) {


            return response()->json([


                "status"=> "Product is out of stock please wait for a while",
            ],404);

        }
        $user = auth()->user();


        // $purchasedProduct =  PurchasedProduct::where("user_id", $user->id)
        // ->where("name", $product->name)
        // ->where("price", $product->price)
        // ->first();



        try {

            $purchasedProduct =  PurchasedProduct::where("user_id", $user->id)
                ->where("name", $product->name)
                ->where("price", $product->Price)->first();

            if ($purchasedProduct) {

                $quantity = $purchasedProduct->quantity + 1;

                $purchasedProduct->update([
                    'quantity' => $quantity
                ]);

            } else {
                PurchasedProduct::create([

                    'user_id' => $user->id,
                    'name' => $product->name,
                    'price' => $product->Price,
                    'quantity' => 1

                ]);
            }

            $stock = $product->quantity;
            $product->update([

                'quantity' => $stock-1

            ]);

            
        } catch (\Exception $ex) {
            return response()->json([


                //'message' => 'PRODUCT ADDED SUCCESSFULLY' . $ex->getMessage()
                'error' => 'Failed to Added Product due to this error' . $ex->getMessage()
            ], 201);
        }
        // return $product;
        // Now Storing Product in cookies

        //     $cart = session()->get('cart');
        //     $productID = $product->id;

        //    // session()->flush();

        //     if (!$cart) {

        //         $cart = [

        //             $productID => [

        //                 'name' => $product->name,
        //                 'quantity' => 1,
        //                 'Price' => $product->Price,
        //                 'image' => $product->gallery->image
        //             ]
        //         ];
        //     }

        //     if (isset($cart[$productID])) {

        //         $cart[$productID]['quantity']++;
        //         session()->put('cart', $cart);
        //     } else {


        //         $cart[$productID] = [

        //             'name' => $product->name,
        //             'quantity' => 1,
        //             'Price' => $product->Price,
        //             'image' => $product->gallery->image
        //         ];

        //         session()->put('cart', $cart);
        //     }




        //     //$cartTotalItems = count($cart);
        //  dd($cartTotalItems);

        // return response()->json([

        //     'products' => $cart,
        //     //'cart_total_items' => $cartTotalItems
        // ], 201);
    }

    public function CalculateCartItems()
    {

        $cart = session()->get('cart');
        $cartTotalItems = count($cart);


        return response()->json([

            //'products' => $cart,
            'cart_total_items' => $cartTotalItems
        ], 201);
    }
}
