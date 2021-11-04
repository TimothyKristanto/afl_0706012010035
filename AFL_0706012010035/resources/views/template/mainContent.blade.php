<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    @include('template.navbar')

    <section>
        @for ($i = 1; $i <= $backgroundRows; $i++)
        <div class="rows">
            <div>
                <i class="fas fa-crown"></i>
                <i class="fas fa-chess-king"></i>
                <i class="fas fa-basketball-ball"></i>
                <i class="fas fa-volleyball-ball"></i>
                <i class="fas fa-hockey-puck"></i>
                <i class="fas fa-baseball-ball"></i>
                <i class="fas fa-bowling-ball"></i>
                <i class="fas fa-futbol"></i>
                <i class="fas fa-football-ball"></i>
                <i class="far fa-futbol"></i>
                <i class="fas fa-golf-ball"></i>
                <i class="fas fa-table-tennis"></i>
                <i class="fas fa-running"></i>
                <i class="fas fa-dumbbell"></i>
                <i class="fas fa-apple-alt"></i>
                <i class="fas fa-archive"></i>
                <i class="fas fa-beer"></i>
                <i class="fas fa-bell"></i>
                <i class="fas fa-bookmark"></i>
                <i class="fas fa-basketball-ball"></i>
            </div>
            <div>
                <i class="fas fa-crown"></i>
                <i class="fas fa-chess-king"></i>
                <i class="fas fa-basketball-ball"></i>
                <i class="fas fa-volleyball-ball"></i>
                <i class="fas fa-hockey-puck"></i>
                <i class="fas fa-baseball-ball"></i>
                <i class="fas fa-bowling-ball"></i>
                <i class="fas fa-futbol"></i>
                <i class="fas fa-football-ball"></i>
                <i class="far fa-futbol"></i>
                <i class="fas fa-golf-ball"></i>
                <i class="fas fa-table-tennis"></i>
                <i class="fas fa-running"></i>
                <i class="fas fa-dumbbell"></i>
                <i class="fas fa-apple-alt"></i>
                <i class="fas fa-archive"></i>
                <i class="fas fa-beer"></i>
                <i class="fas fa-bell"></i>
                <i class="fas fa-bookmark"></i>
                <i class="fas fa-basketball-ball"></i>
            </div>
        </div>
        @endfor
        
    </section>

    <div class="container-fluid">
        @yield('mainContent')
    </div>
</body>
</html>