@extends('partials.layout')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                @include('orders.create')
                <img src="icons/chess.jpg" class="img-fluid" alt="Pavyzdinė nuotrauka">

            </div>
            <div class="col">
                <h3>Informacija</h3>
                <ul>
                    <li>Kaina: Šachmatų rinkinys - 250€  </li>
                    <li>Šachmatų rinkinį sudaro :</li>
                    <ul>
                        <li >Sulankstoma šachmatų lenta tokia, kaip pavaizduota nuotraukose</li>
                        <li>Šachmatų figūros</li>
                        <li>Item 3</li>
                    </ul>
                    <li>Item 3</li>
                </ul>
            </div>
        </div>
    </div>
@endsection