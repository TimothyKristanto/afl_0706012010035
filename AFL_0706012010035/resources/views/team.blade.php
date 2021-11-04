@extends('template.mainContent')

@section('title', $title)

@section('mainContent')
<div class="d-flex justify-content-center mt-5">
    <h1 class="title fw-bold">List of Teams</h1>
</div>

<div class="d-flex justify-content-end mt-5">
    <a href="{{ route('team.create') }}" class="btn btn-outline-dark rounded-pill create-data">
        Make your own teams &nbsp; <i class="fas fa-plus"></i>
    </a>
</div>

<br>

<div class="row justify-content-center">

    @foreach ($teams as $team)
        <div class="card col-sm-4 bg-dark rounded-lg mx-2 my-2 champs-card">
            <div class="d-flex justify-content-end pt-2">
                <a href="{{ route('team.show', $team->id) }}" class="btn btn-primary mx-1 rounded-circle">
                    <i class="fas fa-info"></i>
                </a>
                <a href="{{ route('team.edit', $team->id) }}" class="btn btn-success mx-1 rounded-circle">
                    <i class="fas fa-cog"></i>
                </a>
                <form action="{{ route('team.destroy', $team['id']) }}" class="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
            <br>
            <div class="px-2 py-3">
                <h4 class="card-title fw-bold">{{ $team['name'] }}</h4>
                <h6 class="">{{ $team['team_location_origin'] }}</h6>

                <p class=""> Coached by {{ $team['head_coach'] }}</p>
                
            </div>
        </div>
        
    @endforeach

@endsection