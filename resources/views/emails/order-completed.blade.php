@component('mail::message')
    # Užsakymas baigtas!

    Užsakymą galite atsiimti nurodytu adresu: Kauno 10.

    Dėl daugiau informacijos skambinkite 861111111 arba rašykit el. paštu: lukas@gmail.com

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
