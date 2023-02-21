@extends('layouts.home')
@section('title')
Data Transaksi
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Transaksi</h4>

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
                       <td>{{ $transaksi->id }}</td>
                   </tr>

                   <tr>
                       <td>Travel Packages Id</td>
                       <td>{{ $transaksi->travel_package_id}}</td>
                   </tr>

                   <tr>
                       <td>User Id</td>
                       <td>{{ $transaksi->user_id }}</td>
                   </tr>

                   <tr>
                    <td>Addtional Visa</td>
                    <td>{{ $transaksi->addtional_visa }}</td>
                </tr>

                <tr>
                    <td>Transaksi Total</td>
                    <td>{{ $transaksi->total_transaksi }}</td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>{{ $transaksi->status_transaksi }}</td>
                </tr>


                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="{{route('transaksi.index')}}"  role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
