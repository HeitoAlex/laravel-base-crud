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
                <a href="{{ route('pages.animals.show', $animal) }}" class="card-link">Animal Details</a>
                <a href="{{ route('pages.animals.edit', $animal) }}" class="card-link">Edit</a>
                {{-- <a href="{{ route('pages.animals.delete', $animal) }}" class="card-link">Delete</a> --}}
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
