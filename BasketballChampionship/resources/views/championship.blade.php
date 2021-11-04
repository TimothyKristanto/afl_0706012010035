@extends('template.mainContent')

@section('title', $title)

@section('mainContent')
    <div class="d-flex justify-content-center mt-5">
        <h1 class="title fw-bold">List of Championship</h1>
    </div>

    <div class="d-flex justify-content-end mt-5">
        <a href="{{ route('championship.create') }}" class="btn btn-outline-dark rounded-pill create-data">
            Make your own championships &nbsp; <i class="fas fa-plus"></i>
        </a>
    </div>

    <br>

    <div class="row justify-content-center">

        @foreach ($championships as $championship)
            <div class="card col-sm-4 bg-dark rounded-lg mx-2 my-2 champs-card">
                <div class="d-flex justify-content-end pt-2">
                    <a href="{{ route('championship.show', $championship->id) }}" class="btn btn-primary mx-1 rounded-circle">
                        <i class="fas fa-info"></i>
                    </a>
                    <a href="{{ route('championship.edit', $championship->id) }}" class="btn btn-success mx-1 rounded-circle">
                        <i class="fas fa-cog"></i>
                    </a>
                    <form action="{{ route('championship.destroy', $championship->id) }}" class="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
                <br>
                <div class="px-2 py-3">
                    <h4 class="card-title fw-bold">{{ $championship['name'] }}</h4>
                    <h6 class="">{{ $championship['league'] }} league</h6>
                    <p class="">Year {{ $championship['year'] }}</p>
                </div>
            </div>
            
        @endforeach

    </div>

@endsection