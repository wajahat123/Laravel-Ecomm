<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $galleries = Gallery::all();

        return view("admin.products.index", compact("products", "galleries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    //    dd($request->all());

        Validator::make($request->all(),[        
            "name" => "required",
            "slug" => "required",
            "quantity" => "required",
            "price" => "required",
            "image" => "required|mimes:jpg,jpeg,png",
        ]);

        // dd($request);
        // if($validator->fails()){
        //     dd($validator->errors());
        // }

        // dd('success');




        $product = Product::create([

            'name' => $request->name,
            'slug' => $request->slug,
            'quantity' => $request->quantity,
            'Price' => $request->price,

        ]);


       // dd($request);
        if ($request->hasFile('image')) {

            

            foreach ($request->file('image') as $image) {



                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('assets/site/img'), $imageName);

                Gallery::create([

                    'product_id' => $product->id,
                    'image' => $imageName,
                    'type' => 1,
                ]);

            }
        }
       

        return back()->withSuccess('Product is Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        // $gallery = Gallery::findOrFail($id);

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $product = Product::findOrFail($id);
        // dd($product);
        // Ager User ne New Images Di hun Tou Purani Wali Delete kerdo Or New wali insert kerdo.
        // Delete Previous Product Images.
        // Insert New Product 
        
        $product->image->delete();
        
        if ($request->hasFile('image')) {

            foreach ($request->file('image') as $image) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('assets/site/img'), $imageName);

                // Create a new Image model and associate it with the product
                $result = $product->images()->create([
                    'image' => $imageName,
                    'type' => 1,
                ]);
            }


        }

        // if (isset($gallery->image)){
        //     $imageName = time(). '.' . $request->image->extension();
        //        $request->image->move(public_path('assets/site/img'), $imageName);
        //        $product -> images-> image = $imageName;

        // }


        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->quantity = $request->quantity;
        $product->Price = $request->price;

        $product->save();
        // $product -> fill(request()->all())->save();
        return back()->withSuccess('Product is Updated Successfully');




        //     $product = Product::findOrFail($id);



        // // Insert New Product Images
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imageName = time() . '.' . $image->extension();
        //         $image->move(public_path('assets/site/img'), $imageName);

        //         // Create a new Image model and associate it with the product
        //         $product->images()->create([
        //             'image' => $imageName,
        //         ]);
        //     }
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted Successfully');

    }
}
