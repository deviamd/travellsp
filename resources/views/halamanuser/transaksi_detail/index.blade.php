@extends('layouts.home')
@section('title')
Transaksi Detail
@endsection

<!-- ini untuk isi home -->
@section('content')
{{-- <div  id="layoutSidenav_content"> --}}
    <main>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-5">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Transaksi Detail</h4>
                                <div class="page-title-right">
                            </div>
                        </div>
                    </div>
                        <!-- end page title -->
                    <div>

                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabel Transaksi</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr style="cursor: pointer;">
                                                    <th>Id</th>
                                                    <th>Transaksi Id</th>
                                                    <th>Username</th>
                                                    <th>Nationality</th>
                                                    <th>Is visa</th>
                                                    <th>Doe Passport</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transaksi_detail as $row)
                                                <tr>

                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->transaksi_id }}</td>
                                                    <td>{{ $row->username}}</td>
                                                    <td>{{ $row->nationality}}</td>
                                                    <td>{{ $row->is_visa}}</td>
                                                    <td>{{ $row->doe_passport}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
        </div>
    </main>
</div>
@endsection
