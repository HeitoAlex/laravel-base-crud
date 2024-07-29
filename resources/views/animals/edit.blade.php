@extends('layouts.app')

@section('page-title' )
    Edit {{ $animal->name}}
@endsection

@section('main-content')
<section class="container">
    <div class="row">
        <h1>
            Edit {{ $animal->name}}
        </h1>
    </div>
    <div class="row">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ( $errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('animals.update', $animal)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name" value="{{ old('name', $animal->name) }}">
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input class="form-control" type="text" placeholder="Animal class" aria-label="Animal class" id="class" name="class" value="{{ old('class', $animal->class) }}">
                </div>
                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input class="form-control" type="text" placeholder="Animal order" aria-label="Animal order" id="order" name="order" value="{{ old('order', $animal->order) }}">
                </div>
                <div class="mb-3">
                    <label for="family" class="form-label">Family</label>
                    <input class="form-control" type="text" placeholder="Animal family" aria-label="Animal family" id="family" name="family" value="{{ old('family', $animal->family) }}">
                </div>
                <div class="mb-3">
                    <label for="diet" class="form-label">Diet</label>
                    <input class="form-control" type="text" placeholder="Animal diet" aria-label="Animal diet" id="diet" name="diet" value="{{ old('diet', $animal->diet) }}">
                </div>
                <div class="mb-3">
                    <label for="habitat" class="form-label">Habitat</label>
                    <input class="form-control" type="text" placeholder="Animal habitat" aria-label="Animal habitat" id="habitat" name="habitat" value="{{ old('habitat', $animal->habitat) }}">
                </div>
                <div class="mb-3 form-check">
                    <input type="submit" value="Update animal" class="btn btn-primary">
                    <input type="reset" value="Reset fields" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
