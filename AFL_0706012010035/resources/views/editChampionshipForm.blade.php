@extends('template.noNavbarMainContent')

@section('title', $title)

@section('mainContent')
    <a href="{{ route('championship.index') }}" class="btn btn-outline-dark rounded-pill back">
        <i class="fas fa-backspace"></i>
    </a>

    <div class="container-fluid mt-5">
        <h1 class="title fw-bold text-center">Edit Your Championship Data</h1>
        <form action="{{ route('championship.update', $championship->id) }}" method="POST" class="mt-5 forms bg-dark rounded-lg p-5 m-5">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="name"><h5>Championship name:</h5></label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $championship['name'] }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="year"><h5>Championship year:</h5></label>
                <input type="text" name="year" class="form-control" id="year" value="{{ $championship['year'] }}" required> 
            </div>
            <div class="form-group mt-4">
                <label for="league"><h5>League:</h5></label>
                <input type="text" name="league" class="form-control" id="league" value="{{ $championship['league'] }}" required>
            </div>
            <div class="form-group mt-4">
                <label for="champ_mvp"><h5>Championship MVP:</h5></label>
                <input type="text" name="championship_mvp" class="form-control" id="champ_mvp" value="{{ $championship['championship_mvp'] }}" required>
            </div>
            <div class="form-group">
                <label for="champ_team" class="mt-4"><h5>Champion Team:</h5></label>
                <select name="champion_team" id="champ_team" class="rounded-lg w-100" required>
                    @foreach ($teams as $team)
                        @if ($team['id'] === $championship['champion_team'])
                            <option value="{{ $team['id'] }}" selected>{{ $team['name'] }}</option>
                        @else
                            <option value="{{ $team['id'] }}">{{ $team['name'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    

@endsection