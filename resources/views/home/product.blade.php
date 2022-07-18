@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')

<nav class="grid wide">
    <div class="row">
        <div class="col l-2 m-0 c-0">
            <div class="filter_product">
                
                <form action="{{url('home/product/findPrice/'.$tle->id)}}" method="get">
                    <h4 style="padding-top: 20px; margin-left:16px; ">Price:</h4>
                    <h4><input name="price1" id="price1" type="text" class="form-filter form-control"></h4>
                    <h4 style="margin-left:16px; ">to</h4>
                    <h4><input name="price2" id="price2" type="text" class="form-filter form-control"></h4>
                    <h4><button class="filter_button">Find</button></h4>
                </form>

            </div>
        </div>
        <div class="col l-10 m-12 c-12">
            <div class="content">
                <div class="title_product_2">
                    {{$tle->name}}
                </div>
                <!-- alert cart -->
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div style="border-bottom:1px solid;"></div>
                <div class="row">
                    @foreach($products as $p)
                    <div class="col l-2-4 m-4 c-12">
                        <div class="item_product">
                            <div class="cart_index">
                                <img class="img_product" src="{{ url('images/'.$p->image) }}" alt="">
                                <button onclick="location.href=`{{ url('home/add-to-cart/'.$p->id) }}`" class="button_product_2"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </div>
                            <br>
                            <h4 class="title_product"><a href="{{ url('home/productDetail/'.$p->id) }}">{{ $p->name }}</a></h4>
                            <h3 class="price_product">{{ $p->price }} $</h3>
                        </div>
                    </div>
                    @endforeach
                </div>          

            </div>
        </div>
    </div>
    <div class="link_phan_trang">{{ $products -> links() }}</div>
</nav>
<style>
    .relative{
        background-color: none;
        padding: 20px 10px 20px 10px;
        margin: 0 20px 0 20px;
        border-radius: 20px;  
        color:#33CC33;
    }

    .relative:hover{
        background-color: #33CC33;
        color:#fff; 
        transition: 0.1s;
        text-decoration: none;
    }
    
</style>
@endsection
@section('script-section')


@endsection