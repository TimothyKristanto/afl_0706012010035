@extends('template.noNavbarMainContent')

@section('title', $title)

@section('mainContent')
    <a href="{{ url()->previous() }}" class="btn btn-outline-dark rounded-pill back">
        <i class="fas fa-backspace"></i>
    </a>

    <div class="container-fluid text-center content">
        <h1 class="display-4 fw-bold title">{{ $team['name'] }} Details</h1>
        <div class="card mx-2 mt-5 p-5 bg-dark rounded-lg">
            Team name
            <h2 class="card-title fw-bold"> {{ $team['name'] }} </h3>
            <br>
            <i class="fas fa-crown card-img-1"></i>
            <i class="fas fa-basketball-ball card-img-3"></i>
            Team Location Origin
            <h4 class="mb-4 fw-bold">{{ $team['team_location_origin'] }} </h5>
            Head coach
            <h4 class="mb-4 fw-bold">{{ $team['head_coach'] }}</h5>
            <i class="fas fa-basketball-ball card-img-2"></i>
            Total championship
            <h4 class="mb-4 fw-bold">{{ $championshipsLength }}</h5>
        </div>
    </div>

    <div class="container-fluid content">
        <h4 class="fw-bold title">{{ $team['name'] }} Championships</h4>
        <div class="row mt-2 justify-content-center">
            
        @foreach ($championships as $championship)
                <div class="card text-center col-sm-3 bg-dark rounded-lg mx-2 my-2 champs-card">
                    <i class="fas fa-crown simple-card-img"></i><br>
                    <h3>{{ $championship['name'] }}</h3>
                </div>
        @endforeach

        </div>
    </div>

@endsection