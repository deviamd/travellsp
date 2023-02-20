@extends('layouts.home')
@section('title')
Data Travel Package
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Travel Package</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-6">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-11">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title"> Table</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Id</td>
                       <td>{{ $travel_package->id }}</td>
                   </tr>

                   <tr>
                       <td>Title</td>
                       <td>{{ $travel_package->title}}</td>
                   </tr>
                   <tr>
                       <td>Slug</td>
                       <td>{{ $travel_package->slug}}</td>
                   </tr>
                   <tr>
                       <td>Location</td>
                       <td>{{ $travel_package->location }}</td>
                   </tr>

                   <tr>
                    <td>About</td>
                    <td>{{ $travel_package->about }}</td>
                </tr>

                <tr>
                    <td>Language</td>
                    <td>{{ $travel_package->language }}</td>
                </tr>

                <tr>
                    <td>Foods</td>
                    <td>{{ $travel_package->foods }}</td>
                </tr>

                <tr>
                    <td>Departure Date</td>
                    <td>{{ $travel_package->departure_date }}</td>
                </tr>

                <tr>
                    <td>Duration</td>
                    <td>{{ $travel_package->duration }}</td>
                </tr>

                <tr>
                    <td>Type</td></td>
                    <td>{{ $travel_package->type}}</td>
                </tr>

                <tr>
                    <td>Price</td></td>
                    <td>{{ $travel_package->price}}</td>
                </tr>


                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="{{route('travel_package.index')}}"  role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
