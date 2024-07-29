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
                <a href="{{ route('animals.show', $animal) }}" class="card-link">Animal Details</a>
                <a href="{{ route('animals.edit', $animal) }}" class="card-link">Edit</a>

                {{-- per realizzare una delete devo prima creare un form che mi consenta di assegnare il metodo 'delete'  --}}
                <form action="{{ route('animals.destroy', $animal) }}" method="POST" class="d-inline-block card-link animal-form-delete" data-animal-name="{{ $animal->name }}">
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
