@component('mail::message')

    # Užsakymas sėkmingai įvykdytas!

    -   Užsakovas: {{$order->full_name}}, {{$order->email}};

    -   Kaina: {{Config::get('constants.order.order_price')}};

    -   Užsakymo laikas: {{$order->created_at}}.

    -   Todo: add payment method



    Apie šachmatų rinkinio pagaminimą informuosime el. laišku bei žinute nurodytu telefonu numeriu.


    Dėkojame, kad pirkote,<br>
    {{ config('app.name') }}
@endcomponent