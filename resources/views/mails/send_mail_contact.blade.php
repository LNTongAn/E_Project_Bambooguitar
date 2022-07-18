<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Have customers contact you.</p>
    <p>Customer: </p>
    <p>Name: {{$contact_mail['name']}}</p>
    <p>Email: {{$contact_mail['email']}}</p>
    <p>Phone: {{$contact_mail['phone']}}</p>
    <h4>Message: </h4>
    <p>{{$contact_mail['message']}}</p>
</body>
</html>
