@extends('layouts.home')
@section('title')
Data
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Data</h4>

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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title"> Table</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Id</td>

                       <td>{{ $user->id }}</td>
                   </tr>
                   <tr>
                       <td>Name</td>

                       <td>{{ $user->name }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>

                       <td>{{ $user->email }}</td>
                   </tr>
                   {{-- <tr>
                    <td>Level</td>

                    <td>{{ $user->role }}</td>
                </tr> --}}
                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/user" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
