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
        <div>
            <form action="{{ route('pages.animals.update', $animal)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name" value="{{ $animal->name }}">
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input class="form-control" type="text" placeholder="Animal class" aria-label="Animal class" id="class" name="class" value="{{ $animal->class }}">
                </div>
                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input class="form-control" type="text" placeholder="Animal order" aria-label="Animal order" id="order" name="order" value="{{ $animal->order }}">
                </div>
                <div class="mb-3">
                    <label for="family" class="form-label">Family</label>
                    <input class="form-control" type="text" placeholder="Animal family" aria-label="Animal family" id="family" name="family" value="{{ $animal->family }}">
                </div>
                <div class="mb-3">
                    <label for="diet" class="form-label">Diet</label>
                    <input class="form-control" type="text" placeholder="Animal diet" aria-label="Animal diet" id="diet" name="diet" value="{{ $animal->diet }}">
                </div>
                <div class="mb-3">
                    <label for="habitat" class="form-label">Habitat</label>
                    <input class="form-control" type="text" placeholder="Animal habitat" aria-label="Animal habitat" id="habitat" name="habitat" value="{{ $animal->habitat }}">
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
