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
    <p>Sorry, your order was canceled due to {{ session('reason') }} . I hope you understand!</p>


    <table class="tb2">
        <tr class="tb2 tb2H">
            <th class="tb2">Name</th>
            <th class="tb2">image</th>
            <th class="tb2">qty</th>
            <th class="tb2">price</th>
        </tr>
        @foreach ($deleteOrderMail as $details)
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
