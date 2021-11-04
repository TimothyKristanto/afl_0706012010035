@extends('template.noNavbarMainContent')

@section('title', $title)

@section('mainContent')
    <a href="{{ route('championship.index') }}" class="btn btn-outline-dark rounded-pill back">
        <i class="fas fa-backspace"></i>
    </a>

    <div class="container-fluid text-center content">
        <h1 class="display-4 fw-bold title">{{ $championship['name'] }} Details</h1>
        <div class="card mx-2 mt-5 p-5 bg-dark rounded-lg">
            Championship name
            <h3 class="card-title fw-bold"> {{ $championship['name'] }} </h3>
            <br>
            <i class="fas fa-crown card-img-1"></i>
            <i class="fas fa-basketball-ball card-img-3"></i>
            Year
            <h5 class="mb-4 fw-bold">{{ $championship['year'] }} </h5>
            League
            <h5 class="mb-4 fw-bold">{{ $championship['league'] }}</h5>
            <i class="fas fa-basketball-ball card-img-2"></i>
            Championship MVP
            <h5 class="mb-4 fw-bold">{{ $championship['championship_mvp'] }}</h5>
            Champion team
            <h5 class="mb-4 fw-bold">{{ $championship->team->name }} 
                <a href="{{ route('team.show', $championship->champion_team) }}" class="btn btn-primary mx-1 rounded-circle">
                    <i class="fas fa-info"></i>
                </a> 
            </h5>
        </div>
    </div>

@endsection