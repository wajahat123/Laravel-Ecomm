<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
                    <li><a href="#">CRM</a></li>
                    <li><a href="#">Personal</a></li>
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
            <h2 class="heading">Dashboard</h2>
            <div class="container">
                <div class="main-block">
                    <div class="block block-1">
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24">
                            <path class="fill-primary"
                                d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                            </path>
                        </svg>
                        <h2>Total Revenue</h2>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <span>20%</span>
                        </span>
                    </div>
                    <div class="info">
                        <h3>$26,35,262</h3>
                        <p>in last week</p>
                    </div>
                </div>

                <div class="main-block">
                    <div class="block block-1 light-blue">
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24">
                            <path class="fill-primary"
                                d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                            </path>
                        </svg>
                        <h2>Total Revenue</h2>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <span>20%</span>
                        </span>
                    </div>
                    <div class="info">
                        <h3>$26,35,262</h3>
                        <p>in last week</p>
                    </div>
                </div>

                <div class="main-block">
                    <div class="block block-1 light-yellow">
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24">
                            <path class="fill-primary"
                                d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                            </path>
                        </svg>
                        <h2>Total Revenue</h2>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <span>20%</span>
                        </span>
                    </div>
                    <div class="info">
                        <h3>$26,35,262</h3>
                        <p>in last week</p>
                    </div>
                </div>

                <div class="main-block">
                    <div class="block block-1 light-green">
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24">
                            <path class="fill-primary"
                                d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                            </path>
                        </svg>
                        <h2>Total Revenue</h2>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <span>20%</span>
                        </span>
                    </div>
                    <div class="info">
                        <h3>$26,35,262</h3>
                        <p>in last week</p>
                    </div>
                </div>
            </div>
            <div class="container-big">
                <div class="box3">
                    <div class="main-big-block">
                        <div class="big-nav">
                            <h4 class="heading-big">Sales Over View</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="grid-money-text">
                            <div class="money-text">
                                <i class="fa-solid fa-circle-right"></i>
                                <div class="money">$9.65K</div>
                                <div class="paragraph">/ Income</div>
                            </div>

                            <div class="money-text">
                                <i class="fa-solid fa-circle-right"></i>
                                <div class="money">$9.65K</div>
                                <div class="paragraph">/ Income</div>
                            </div>
                        </div>
                        <div class="image" id="chart">
                            <!-- <img src="lines.PNG" alt=""> -->
                        </div>
                    </div>
                </div>

                <div class="box4">
                    <div class="main-big-block">
                        <div class="big-nav">
                            <h4 class="heading-big">Sales Over View</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>

                        <div class="profile-text-price">
                            <img src="2.jpg" alt="">
                            <div class="profile-information">
                                <h4>Socrates Itumay</h4>
                                <p>15 Purchases</p>
                            </div>
                            <div class="price">$1,835</div>
                        </div>

                        <div class="profile-text-price">
                            <img src="3.jpg" alt="">
                            <div class="profile-information">
                                <h4>Socrates Itumay</h4>
                                <p>15 Purchases</p>
                            </div>
                            <div class="price">$1,835</div>
                        </div>

                        <div class="profile-text-price">
                            <img src="4.jpg" alt="">
                            <div class="profile-information">
                                <h4>Socrates Itumay</h4>
                                <p>15 Purchases</p>
                            </div>
                            <div class="price">$1,835</div>
                        </div>

                        <div class="profile-text-price">
                            <img src="5.jpg" alt="">
                            <div class="profile-information">
                                <h4>Socrates Itumay</h4>
                                <p>15 Purchases</p>
                            </div>
                            <div class="price">$1,835</div>
                        </div>

                        <div class="profile-text-price">
                            <img src="6.jpg" alt="">
                            <div class="profile-information">
                                <h4>Socrates Itumay</h4>
                                <p>15 Purchases</p>
                            </div>
                            <div class="price">$1,835</div>
                        </div>

                        <div class="profile-text-price">
                            <img src="10.jpg" alt="">
                            <div class="profile-information">
                                <h4>Socrates Itumay</h4>
                                <p>15 Purchases</p>
                            </div>
                            <div class="price">$1,835</div>
                        </div>
                    </div>
                </div>

                <div class="box4">
                    <div class="main-big-block">
                        <div class="big-nav">
                            <h4 class="heading-big">Sales Over View</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="image-circle" id="chart1">
                            <!-- <img src="circle.PNG" alt=""> -->
                        </div>
                        <div class="two-column">
                            <div class="col-1">
                                <p>Sale Items</p>
                                <h5>567</h5>
                                <p class="green">0.23%</p>
                            </div>

                            <div class="col-1">
                                <p>Sale Items</p>
                                <h5>567</h5>
                                <p class="red">0.23%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="third-container">
                <div class="box-9">
                    <div class="third-main-block">
                        <div class="third-big-nav">
                            <h4 class="third-heading">Upcoming Products</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                    <div class="image-title-price">
                        <img src="mobile.jpg" alt="">
                        <div class="third info">
                            <h5 class="third-heading">Smart Phone</h5>
                            <p class="third-para">Mobiles</p>
                        </div>
                        <div class="price icon date">
                            <p class="price">$199.99</p>
                            <div class="icon-date">
                                <i class="fas fa-clock"></i>
                                <p class="date">01 Apr, 2023</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="image-title-price">
                        <img src="headphone.jpg" alt="">
                        <div class="third info">
                            <h5 class="third-heading">Smart Phone</h5>
                            <p class="third-para">Mobiles</p>
                        </div>
                        <div class="price icon date">
                            <p class="price">$199.99</p>
                            <div class="icon-date">
                                <i class="fas fa-clock"></i>
                                <p class="date">01 Apr, 2023</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="image-title-price">
                        <img src="stopwatch.jpg" alt="">
                        <div class="third info">
                            <h5 class="third-heading">Smart Phone</h5>
                            <p class="third-para">Mobiles</p>
                        </div>
                        <div class="price icon date">
                            <p class="price">$199.99</p>
                            <div class="icon-date">
                                <i class="fas fa-clock"></i>
                                <p class="date">01 Apr, 2023</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="image-title-price">
                        <img src="camera.jpg" alt="">
                        <div class="third info">
                            <h5 class="third-heading">Smart Phone</h5>
                            <p class="third-para">Mobiles</p>
                        </div>
                        <div class="price icon date">
                            <p class="price">$199.99</p>
                            <div class="icon-date">
                                <i class="fas fa-clock"></i>
                                <p class="date">01 Apr, 2023</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="image-title-price">
                        <img src="shoes.jpg" alt="">
                        <div class="third info">
                            <h5 class="third-heading">Smart Phone</h5>
                            <p class="third-para">Mobiles</p>
                        </div>
                        <div class="price icon date">
                            <p class="price">$199.99</p>
                            <div class="icon-date">
                                <i class="fas fa-clock"></i>
                                <p class="date">01 Apr, 2023</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="box-9">
                    <div class="third-main-block">
                        <div class="third-big-nav">
                            <h4 class="third-heading">Upcoming Products</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div id="chart-3"></div>
                        
                    </div>
                </div>

                <div class="box-9">
                    <div class="third-main-block">
                        <div class="third-big-nav">
                            <h4 class="third-heading">Upcoming Products</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>

                        <div class="third-second-big-nav">
                            <h4 class="third-heading">Product</h4>
                            <h4 class="third-heading">Category</h4>
                            <h4 class="third-heading">Stocks</h4>
                            <h4 class="third-heading">Total Price</h4>
                        </div>

                        <div class="selling-product">
                            <div class="selling image-info">
                                <img src="13.png" alt="">
                                <h5 class="selling-product-heading">School bag</h5>
                            </div>
                             <div class="category">Bags</div>
                             <div class="stock">In Stock</div>
                             <div class="price-selling-pro">5,093</div>
                        </div>

                        <div class="selling-product">
                            <div class="selling image-info">
                                <img src="13.png" alt="">
                                <h5 class="selling-product-heading">School bag</h5>
                            </div>
                             <div class="category">Bags</div>
                             <div class="out-stock">Out Of Stock</div>
                             <div class="price-selling-pro">5,093</div>
                        </div>

                        <div class="selling-product">
                            <div class="selling image-info">
                                <img src="13.png" alt="">
                                <h5 class="selling-product-heading">School bag</h5>
                            </div>
                             <div class="category">Bags</div>
                             <div class="stock">In Stock</div>
                             <div class="price-selling-pro">5,093</div>
                        </div>

                        <div class="selling-product">
                            <div class="selling image-info">
                                <img src="13.png" alt="">
                                <h5 class="selling-product-heading">School bag</h5>
                            </div>
                             <div class="category">Bags</div>
                             <div class="out-stock">Out Of Stock</div>
                             <div class="price-selling-pro">5,093</div>
                        </div>

                        <div class="selling-product">
                            <div class="selling image-info">
                                <img src="13.png" alt="">
                                <h5 class="selling-product-heading">School bag</h5>
                            </div>
                             <div class="category">Bags</div>
                             <div class="stock">In Stock</div>
                             <div class="price-selling-pro">5,093</div>
                        </div>

                        
                     </div>
                </div>
            </div>
            <div class="container-forth">
                <div class="box-12">
                    <div class="forth-main-block">
                        <div class="forth-big-nav">
                            <h4 class="forth-heading">Upcoming Products</h4>
                            <i class="fa-solid fa-bars"></i>
                        </div>

                        <div class="forth-second-big-nav">
                            <div class="forth-second-big-nav-first-heading">
                                <h5 class="forth-second-heading">S.NO</h5>
                            </div>
                            <div class="forth-second-big-nav-second-heading">
                                <h5 class="forth-second-heading">ITEM DETAILS</h5>
                            </div>
                            <div class="forth-second-big-nav-third-heading">
                                <h5 class="forth-second-heading">CUSTOMER ID</h5>
                            </div>
                            <div class="forth-second-big-nav-forth-heading">
                                <h5 class="forth-second-heading">CUSTOMER DETAILS</h5>
                            </div>
                            <div class="forth-second-big-nav-fifth-heading">
                                <h5 class="forth-second-heading">ORDERED DATE</h5>
                            </div>
                            <div class="forth-second-big-nav-six-heading">
                                <h5 class="forth-second-heading">STATUS</h5>
                            </div>
                            <div class="forth-second-big-nav-seven-heading">
                                <h5 class="forth-second-heading">PRICE</h5>
                            </div>
                            <div class="forth-second-big-nav-eight-heading">
                                <h5 class="forth-second-heading">ACTION</h5>
                            </div>
                            
                        </div>

                        <div class="first-number-product-information first-product">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="first-number-product-information">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="first-number-product-information">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="first-number-product-information">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="first-number-product-information">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="first-number-product-information">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="first-number-product-information last-product">
                            <div class="numbers">1</div>
                            <div class="item-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Black Heals For Women</h6>
                                    <span>#2324</span>
                                </div>
                            </div>
                            <div class="customer-id">
                                <span class="customer-id-span">
                                    #user1
                                </span>
                            </div>
                            <div class="customer-details">
                                <img src="pro1.png" alt="">
                                <div class="info">
                                    <h6>Socrates Itumay</h6>
                                    <span class="customer-details-email">socratesitumay@gmail.com</span>
                                </div>
                            </div>
                            <div class="ordered-date">
                                <span class="date">10-12-2022</span>
                            </div>
                            <div class="status">
                                <button class="status-button">Success</button>
                            </div>
                            <div class="price">
                                <h6 class="price-product-info">$666</h6>
                            </div>
                            <div class="actions-three-buttons">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-pencil-ruler"></i>
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            
                
            
        </div>
    </section>
    <script>
        var sales_overview_options = {
          series: [
            {
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, 
            {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, 
            {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
            },
            dataLabels: {
            enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
            title: {
                text: '$ (thousands)'
            }
            },
            fill: {
                opacity: 1,
                colors: ['#b0b6fb', '#5a66f1', '#1d2ffd']
            },
            tooltip: {
            y: {
                formatter: function (val) {
                return "$ " + val + " thousands"
                }
            }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), sales_overview_options);
        chart.render();


        var sales_value_options = {
        series: [75, 25],
        chart: {
            height: 500,
            type: 'donut'
        },
        responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
            position: 'bottom'
            },
        }
        
        }],
        fill: {
                opacity: 1,
                colors: ['#5a66f1', '#b0b6fb']
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), sales_value_options);
        chart.render();


        var social_options = {
          series: [{
          data: [400, 450, 500, 550, 650, 750]
        }],
          chart: {
          type: 'bar',
          height: 400
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        fill: {
        type: 'gradient',
        gradient: {
            type: "horizontal",
            shadeIntensity: 1,
            gradientToColors: ['#5a66f1', '#5a66f1'], // optional, if not defined - uses the shades of same color in series
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 70],
            colorStops: []
        }
        },
        xaxis: {
          categories: ['Facebook', 'Instagram', 'Dribble', 'Twitter', 'Chrome', 'Pininterest'
          ],
        }
        
        
        };

        var chart = new ApexCharts(document.querySelector("#chart-3"), social_options);
        chart.render();


      
    </script>
</body>

</html>