@extends('layouts.site');



@section('ecom')
    <div class="content-wrapper">





        <div class="container">
            <div class="row pt120">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="heading align-center mb60">
                        <h4 class="h1 heading-title">E-commerce tutorial</h4>
                        <p class="heading-text">Buy books, and we ship to you.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Books products grid -->

        <div class="container">
            <div class="row pt120">
                <div class="books-grid">



                    <div class="row mb30">
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="books-item">
                                        <div class="books-item-thumb">
                                            {{-- @dd($product->images) --}}
                                            @if ( count ($product->images) > 0 )
                                                <img src="{{ $product->images[0]->image }}" alt="book">
                                            @endif

                                            <div class="new">New</div>
                                            <div class="sale">Sale</div>
                                            <div class="overlay overlay-books"></div>
                                        </div>

                                        <div class="books-item-info">
                                            <h5 class="books-title"><a href="{{route('product-details', $product->slug)}}">{{ $product ? $product->name : '' }}</a></h5>

                                            <div class="books-price">{{ env('PRODUCT_CURRENCY') . $product->Price }}</div>
                                        </div>

                                        <a href="javascript:void(0)" data-id = "{{ $product ? $product->id : '' }}"
                                            class="btn btn-small btn--dark add add_to_cart_btn">
                                            <span class="text">Add to Cart</span>
                                            <i class="seoicon-commerce"></i>
                                        </a>

                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>




                    <div class="row pb120">

                        <div class="col-lg-12">

                            <nav class="navigation align-center">

                                <a href="#" class="page-numbers bg-border-color current"><span>1</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>5</span></a>

                                <svg class="btn-prev">
                                    <use xlink:href="#arrow-left"></use>
                                </svg>
                                <svg class="btn-next">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>

                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts-ecom')
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <script>
        $(document).ready(function() {

            $('.add_to_cart_btn').click(function() {


                var product_id = $(this).data('id');
                console.log(product_id);

                $.ajax({

                    url: "{{ route('add_to_cart') }}",
                    method: "GET",
                    data: {
                        product_id
                    },

                    success: function(data) {

                        // if (data.products) {

                        //     console.log(data.products);

                        // }

                        if(data.message){

                            console.log(data.message);
                        }


                        // CalculateCartItems();
                        // if (data.cart_total_items) {

                        //     console.log(data.cart_total_items);

                        // }

                    },

                    error: function(response) {

                        console.log(response);

                    }
                })


            });

        });
    </script>



    <script>

function CalculateCartItems(data) {

        $.ajax({

                url: "{{ route('calculate.add_to_cart') }}",
                method: 'GET',


                success: function(data) {


                    if(data.cart_total_items){
                    $('.cart_total_items').html(data.cart_total_items);
                    
                }
                    console.log(data)

                        return data;

              

                }



            }

        );
        }
    </script>
@endsection
