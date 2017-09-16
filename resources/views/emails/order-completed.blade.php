@component('mail::message')
    # Užsakymas baigtas!

    Užsakymą galite atsiimti nurodytu adresu: {{Config::get('constants.order.address')}};.

    Dėl daugiau informacijos skambinkite {{Config::get('constants.order.telephone')}}; arba rašykit el. paštu: {{Config::get('constants.order.email')}};

    Thanks,
    {{ config('app.name') }}
@endcomponent
