{{-- 


// @foreach ($users as $user) {

//       $loop->index+1;
//       $user->name;
//       $user->quantity;
//       $user->price;
//       $user->image;





     
// }

//  --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Admin Panel Dashboard</title>
</head>

<body>
    <section class="left">
        <nav>
            <div class="logo">
                <img src="desktop-dark.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/admin/products/index">Display Product</a></li>
                    <li><a href="/admin/products/create">Create Products</a></li>
                    <li><a href="/admin/products/edit">Update Product</a></li>
                    <li><a href="/admin/users/index">Show Users</a></li>
                    <li><a href="#">Stocks</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Elements</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">Advances UI</a></li>
                    <li><a href="#">Basic UI</a></li>
                    <li><a href="#">Nested Menu</a></li>
                    <li><a href="#">Maps</a></li>
                    <li><a href="#">Charts</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="main">
        <nav class="main">
            <div class="icons">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-regular fa-moon"></i>
                <i class="fa-solid fa-bag-shopping"></i>
                <i class="fa-solid fa-gear"></i>
                <i class="fa-solid fa-bell"></i>
            </div>
        </nav>
        <div class="main-dashboard">

            @if ($message = Session::get('success'))
                <p> {{ $message }}</p>
            @endif
            <h2 class="heading">Show Users</h2>
            <div class="row d-flex flex-row justify-content-center align-items-center py-5 mt-2 px-5">
                <div class="col-4">
                    <h2>Tota <b>Users</b></h2>
                </div>
                <div class="col-4">
                    <a type="submit" href="/admin/users/create" class="btn btn-success"> Add New</a>
                </div>
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                      <th>S.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Password</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->password}}</td>
                            {{-- <td> @if (count($user->image) > 0)
                              @for ($x = 0; $x < 1; $x++)
                                  <img src="/{{ $user->image[$x] }}" class="rounded-circle" width="50px"
                                          height="50px" />
                                  </td>
                              @endfor
                          @endif --}}

                          <td> 
                            
                            {{-- @foreach($user->image as $image)
                            <img src="assets/admin/userImages/{{ $image }}" class="rounded-circle" width="50px"
                            height="50px" />
                            @endforeach --}}

                            <img src="/assets/admin/userImages/{{ $user->image}}" class="rounded-circle" width="50px"
                            height="50px" />
                        
                        </td>



                            {{-- @dd($user) --}}
                            <td><a href="/admin/users/{{ $user->id }}/edit" class="btn btn-dark">Edit</a> </td>
                            <td> <a href="/user/{{ $user->id }}/delete" class="btn btn-danger">Delete</a></td>
                            

                            
                        </tr>
                    @endforeach



                </tbody>
            </table>

            {{-- <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Employee <b>Details</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Subhash</td>
                        <td>Administration</td>
                        <td>88***88***</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Subhash</td>
                        <td>Administration</td>
                        <td>88***88***</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Subhash</td>
                        <td>Administration</td>
                        <td>88***88***</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
</body>

</html>
