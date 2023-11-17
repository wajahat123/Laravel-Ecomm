<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view("admin.users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view("admin.users.create");


    }
    public function store(Request $request)
    {
        //
        //    $request = Validator::make(request()->all(), [

        //         "name"=> "required",
        //         "email" => "required",
        //         "password"=> "required",
        //         "image" => "required|mimes:jpg,jpeg,png",
        //         "roll" => "required"

        //     ]);


        $request->validate([

            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
            "image" => "required|mimes:jpg,jpeg,png",

        ]);



        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/admin/userImages'), $imageName);

        // dd($request);

        User::create([

            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "image" => $imageName,
            "role" => $request->role
        ]);


        return back()->with("success", "User Created Sucessfully");
    }

    /**
     * Store a newly created resource in storage.
     */


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
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request);
        $user = User::findorFail($id);

        // $request->validate([

        //     "name" => "required",
        //     "email" => "required",
        //     "roll" => "required",
        //     "password" => "required",
        //     "image" => "required",
        // ]);



        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/admin/userImages'), $imageName);

            // $user->image = $imageName;
            
            $user->update([
                'image' => $imageName
            ]);
        }


        // $user -> fill(request()->all())->save();

        
        $user->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'role' => $request->role
        ]);

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->role = $request->role;
        // $user->password = bcrypt($request->password);

        // $user->save();

        return back()->with('success', 'Product Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        User::findorFail($id)->delete();

        return back()->with('success','Product Deleted Successfully');
    }
}
