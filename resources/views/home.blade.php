<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Train DB</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container py-5">
                <h1 class="pb-4">Trains</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Agenzia</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">N. carreggiate</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)

                            <tr>
                                <th scope="row">{{$train->id}}</th>
                                <td>{{$train->agency}}</td>
                                <td>{{$train->departure_station}}</td>
                                <td>{{$train->arrival_station}}</td>
                                <td>{{$train->departure_time}}</td>
                                <td>{{$train->arrival_time}}</td>
                                <td>{{$train->train_code}}</td>
                                <td>{{$train->n_carriages}}</td>
                                @if ($train->in_time === 1)
                                    <td>No</td>
                                @else
                                <td>Si</td>
                                @endif

                                @if ($train->deleted === 1)
                                <td>Si</td>
                                @else
                                <td>No</td>
                                @endif
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </main>

    </body>
</html>
