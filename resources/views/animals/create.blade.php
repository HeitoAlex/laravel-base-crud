@extends('layouts.app')

@section('page-title' )
    Create new animal
@endsection

@section('main-content')
<section class="container">
    <div class="row">
        <h1>
            Creating new animal
        </h1>
    </div>
    <div class="row">
        <div>
            <form action="{{ route('animals.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input class="form-control" type="text" placeholder="Animal class" aria-label="Animal class" id="class" name="class">
                </div>
                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input class="form-control" type="text" placeholder="Animal order" aria-label="Animal order" id="order" name="order">
                </div>
                <div class="mb-3">
                    <label for="family" class="form-label">Family</label>
                    <input class="form-control" type="text" placeholder="Animal family" aria-label="Animal family" id="family" name="family">
                </div>
                <div class="mb-3">
                    <label for="diet" class="form-label">Diet</label>
                    <input class="form-control" type="text" placeholder="Animal diet" aria-label="Animal diet" id="diet" name="diet">
                </div>
                <div class="mb-3">
                    <label for="habitat" class="form-label">Habitat</label>
                    <input class="form-control" type="text" placeholder="Animal habitat" aria-label="Animal habitat" id="habitat" name="habitat">
                </div>
                <div class="mb-3 form-check">
                    <input type="submit" value="Create new animal" class="btn btn-primary">
                    <input type="reset" value="Reset fields" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
