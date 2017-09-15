<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>TODO: Add payment method</h1>
    <h4>Užsakymas įvykdytas sėkmingai!</h4>
    <ul>
        <li>Užsakovas: {{$order->full_name}}, {{$order->email}} </li>
        <li>Kaina: {{Config::get('constants.order.order_price')}}</li>
        <li>Užsakymo laikas: {{$order->created_at}}</li>
    </ul>
</body>
</html>