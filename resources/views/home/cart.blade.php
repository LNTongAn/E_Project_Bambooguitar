@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')
    <br>
    <nav class="grid wide bg_white_container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table id="cart" class="table table-hover ">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>

                <?php $total = 0; ?>

                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity']; ?>

                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ url('images/' . $details['image']) }}"
                                            width="100" height="100" /></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">${{ $details['price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                            </td>
                            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}
                            </td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i
                                        class="update_cart fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i
                                        class="remove_cart fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total {{ $total }}</strong></td>
                </tr>
                <tr>
                    <td><a href="{{ url('/') }}" class="continue_shopping_cart"><i class="fa fa-angle-left"></i>
                            Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
                </tr>
            </tfoot>
        </table>


        <script type="text/javascript">
            $(".update-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: "{{ url('home/update-cart') }}",
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });

            $(".remove-from-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Are you sure")) {
                    $.ajax({
                        url: "{{ url('home/remove-from-cart') }}",
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>

    </nav>


    <!--checkOut-->
    <div class="grid wide">
        <div style="border-bottom:1px solid"></div><br>
        <h2>Order</h2><br>
        <form action="{{ url('home/storeOrder') }}" method="POST">
            @csrf
            <div class="row">

                @if (session('member'))
                    <input type="hidden" name="member_id" id="member_id" value="{{ session('member')->id }}">
                    <input type="hidden" name="shipping_email" id="shipping_email" value="{{ session('member')->email }}">
                    <input type="hidden" name="name" id="name" value="{{ session('member')->fullname }}">
                @endif

                @php
                    use Carbon\Carbon;
                    // date_default_timezone_set('Asia/Saigon');
                    $mytime = Carbon::now();
                    $disable = session('cart') ? '' : 'disabled';
                @endphp
                <input type="hidden" name="date" id="date" value="{{ $mytime }}">
                <input type="hidden" value="{{ $total }}" name="total_amount" id="total_amount">

                @if (!session('member'))
                    <div class="col l-6 m-6 c-12">
                        Name: <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        Email: <input class="form-control" type="text" name="shipping_email" id="shipping_email" required>
                    </div>
                @endif

                <div class="col l-6 m-6 c-12">
                    Address: <input class="form-control" type="text" name="shipping_address" id="shipping_address"
                        required>
                </div>
                <div class="col l-6 m-6 c-12">

                </div>

                <div>
                    <h3>Payment methods</h3>
                    <input name="payment_term" id="payment_term" type="radio" value="0" checked> cash payment
                    &nbsp&nbsp&nbsp
                    <input name="payment_term" id="payment_term" type="radio" value="1"> online paying
                    <br>
                    <h3>Total</h3>
                    Total: ${{ $total }}
                    <br><br>
                    <button
                        style="padding:5px 10px 5px 10px; border:none; color:#fff; background-color:#33CC33; border-radius:15px; font-size:larger;"
                        {{ $disable }}>Pay</button>
                </div>
            </div>
        </form>

    </div>

@endsection
@section('script-section')


@endsection
