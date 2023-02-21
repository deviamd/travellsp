@extends('layouts.home')
@section('title')
Travel Package
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

                        <h4 class="card-title">Travel Package</h4>
                        <form class="custom-validation" method="POST" action="{{ route('travel_package.store') }}" novalidate="">
                            @csrf
                            @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
            </div>
            @endif



                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required="" placeholder="Silahkan input title">
                            </div>
                            <div class="mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" required="" placeholder="Silahkan input slug">
                            </div>
                            <div class="mb-3">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" required="" placeholder="Silahkan input location">
                            </div>
                            <div class="mb-3">
                                <label>qty</label>
                                <input type="text" name="qty" class="form-control" required="" placeholder="Silahkan input qty">
                            </div>
                            <div class="mb-3">
                                <label>About</label>
                                <input type="text" name="about" class="form-control" required="" placeholder="Silahkan input about">
                            </div>
                            {{-- <div class="mb-3">
                                <label>Featured Event</label>
                                <input type="text" name="featured_event" class="form-control" required="" placeholder="Silahkan input featured event">
                            </div> --}}
                            <div class="mb-3">
                                <label>Language</label>
                                <input type="text" name="language" class="form-control" required="" placeholder="Silahkan input language">
                            </div>
                            <div class="mb-3">
                                <label>Foods</label>
                                <input type="text" name="foods" class="form-control" required="" placeholder="Silahkan input foods">
                            </div>
                            <div class="mb-3">
                                <label>Departure Date</label>
                                <input type="date" name="departure_date" class="form-control" required="" placeholder="Silahkan input departure date">
                            </div>
                            <div class="mb-3">
                                <label>Duration</label>
                                <input type="text" name="duration" class="form-control" required="" placeholder="Silahkan input duration">
                            </div>
                            <div class="mb-3">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control" required="" placeholder="Silahkan input type">
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" required="" placeholder="Silahkan input price">
                            </div>
                            </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                     <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                     </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div> <!-- page-content -->
    </div> <!-- main-content -->
</div>
@endsection
