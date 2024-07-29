@extends('layouts.app')

@section('page-title', 'Animal')

@section('main-content')
<section class="container">
    <div class="row">
        @foreach ( $animals as $animal )
        <div class="card col-4 m-3" style="width: 18rem;">
            <div class="card-header">
                {{ $animal->name }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    {{ $animal->class }}
                </li>
                <li class="list-group-item">
                    {{ $animal->order }}
                </li>
                <li class="list-group-item">
                    {{ $animal->family }}
                </li>
                <li class="list-group-item">
                    {{ $animal->diet }}
                </li>
                <li class="list-group-item">
                    {{ $animal->habitat }}
                </li>
            </ul>
            <div class="card-body">
                <form action="{{ route('animals.restore', $animal) }}" method="POST" class="d-inline-block card-link" data-animal-name="{{ $animal->name }}">
                    @method('PATCH')
                    @csrf
                    <button type="submit" class="restore-button">Restore</button>
                </form>
                <form action="{{ route('animals.permanent.delete', $animal) }}" method="POST" class="d-inline-block card-link animal-form-delete" data-animal-name="{{ $animal->name }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection

@section('custom-scripts')
    @vite('resources/js/delete-confirm.js')
@endsection
