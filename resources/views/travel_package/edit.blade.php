@extends('layouts.home')
@section('title')
Travel Packages
@endsection

<!-- ini untuk isi home -->
@section('content')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
                <h4 class="card-title">Edit Travel Packages</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('travel_package.update',[$travel_package->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}

                                            <div class="mb-3">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" required="" value="{{ $travel_package->title }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Slug</label>
                                                <input type="text" name="slug" class="form-control" required="" value="{{ $travel_package->slug }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" required="" value="{{ $travel_package->location }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>About</label>
                                                <input type="text" name="about" class="form-control" required="" value="{{ $travel_package->about }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Language</label>
                                                <input type="text" name="language" class="form-control" required="" value="{{ $travel_package->language }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>About</label>
                                                <input type="text" name="about" class="form-control" required="" value="{{ $travel_package->about }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Foods</label>
                                                <input type="text" name="foods" class="form-control" required="" value="{{ $travel_package->foods }}">
                                            </div>
                                             <div class="mb-3">
                                                <label>Departure Date</label>
                                                <input type="date" name="departure_date" class="form-control" required="" value="{{ $travel_package->departure_date }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Duration</label>
                                                <input type="text" name="duration" class="form-control" required="" value="{{ $travel_package->duration }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Type</label>
                                                <input type="text" name="type" class="form-control" required="" value="{{ $travel_package->type }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Price</label>
                                                <input type="text" name="price" class="form-control" required="" value="{{ $travel_package->price }}">
                                            </div>

                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection
