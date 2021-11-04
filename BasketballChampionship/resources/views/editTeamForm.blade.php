@extends('template.noNavbarMainContent')

@section('title', $title)

@section('mainContent')
    <a href="{{ route('team.index') }}" class="btn btn-outline-dark rounded-pill back">
        <i class="fas fa-backspace"></i>
    </a>

    <div class="container-fluid mt-5">
        <h1 class="title fw-bold text-center">Create Your Team</h1>
        <form action="{{ route('team.update', $team->id) }}" method="POST" class="mt-5 forms bg-dark rounded-lg p-5 m-5">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="name"><h5>Team name:</h5></label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $team['name'] }}">
            </div>
            <div class="form-group mt-4">
                <label for="team_location"><h5>Location origin:</h5></label>
                <input type="text" name="team_location_origin" class="form-control" id="team_location" value="{{ $team['team_location_origin'] }}">
            </div>
            <div class="form-group mt-4">
                <label for="head_coach"><h5>Head coach:</h5></label>
                <input type="text" name="head_coach" class="form-control" id="head_coach" value="{{ $team['head_coach'] }}">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    

@endsection