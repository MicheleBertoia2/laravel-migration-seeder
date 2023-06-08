<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">

        <h1>Laravel Trains</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train )
                    <tr>
                        <td>{{ $train->id }}</td>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                    <td>{{ $train->orario_di_partenza }}</td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ ($train->in_orario) ? 'si' : 'no' }}</td>
                    <td>{{ ($train->cancellato) ? 'si' : 'no' }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>

</html>
