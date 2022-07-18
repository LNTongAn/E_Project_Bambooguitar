<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            margin-left: 20%;
            margin-right: 20%;
            color: #333;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
            border-color: #212529;
            ;
        }

        table {
            width: 100%;
            text-align: center;

        }

        .tb2 {
            border: none;
            border-bottom: 1px solid #212529;
            border-top: 1px solid #212529;
            padding: 15px;
        }

        .tb2H {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;"><img height="45px" src="{{ $message->embed(public_path() . '/img/logo.png') }}"
            alt=""></h1>

    <p>Hi
    <p>Order is confirmed and please allow us 3-4 business days to complete the delivery</p>
    <table>
        <tr>
            <th>
                <h3>Your Shipping Address</h3>
            </th>
            <th>
                <h3>Payment method</h3>
            </th>
        </tr>
        <tr>
            <td>
                <p>{{ session('order')->shipping_address }}</p>
            </td>
            <td>
                <p>
                    @if (session('order')->payment_term == 0)
                        Cash payment
                    @else
                        Online paying
                    @endif
                </p>
            </td>
        </tr>
    </table>

    <hr>

    <table>
        <tr>
            <th>
                <h3>Shipping name</h3>
            </th>
            <th>
                <h3>Shipping mobile</h3>
            </th>
            <th>
                <h3>Staff</h3>
            </th>
            <th>
                <h3>Delivered date</h3>
            </th>
            <th>
                <h3>Shipping fee</h3>
            </th>
        </tr>
        <tr>
            <td>
                <p>{{ session('order')->shipping_name }}</p>
            </td>
            <td>
                <p>
                    {{ session('order')->shipping_mobile }}
                </p>
            </td>
            <td>
                <p>{{ session('order')->staff_id }}</p>
            </td>
            <td>
                <p>{{ session('order')->delivered_date }}</p>
            </td>
            <td>
                <p>{{ session('order')->shipping_fee }}</p>
            </td>
        </tr>
    </table>

    <hr>

    <table class="tb2">
        <tr class="tb2 tb2H">
            <th class="tb2">Name</th>
            <th class="tb2">image</th>
            <th class="tb2">qty</th>
            <th class="tb2">price</th>
        </tr>
        @foreach ($orderMail as $details)
            <tr class="tb2">
                <td class="tb2">{{ $details->name }}</td>
                <td class="tb2"><img src="{{ $message->embed(public_path() . '/images/' . $details->image) }}"
                        width="100" height="100" /></td>
                <td class="tb2">{{ $details->qty }}</td>
                <td class="tb2">{{ $details->price }}</td>
            </tr>
        @endforeach
        <tr class="tb2">
            <td class="tb2" colspan="3">Total</td>
            <td class="tb2">$ {{ $details->price * $details->qty }}</td>
        </tr>
    </table>
</body>

</html>
