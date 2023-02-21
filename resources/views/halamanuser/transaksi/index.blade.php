@extends('layouts.home')
@section('title')
Transaksi
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
                                <h4 class="mb-sm-0">Transaksi</h4>
                                <div class="page-title-right">
                                </div>
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

                                                    <th>Travel Packages Id</th>
                                                    <th>Nama anda</th>
                                                    <th>Addtional Visa</th>
                                                    <th>Total Transaksi</th>
                                                    <th>qty</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transaksis as $row)
                                                <tr>

                                                    <td>{{ $row->id }}</td>

                                                    <td>{{ Auth::user()->name}}</td>
                                                    <td>{{ $row->addtional_visa}}</td>
                                                    <td>{{ $row->total_transaksi}}</td>
                                                    {{-- <td>{{ $row->status_transaksi}}</td> --}}
                                                    <td>{{ $row->qty}}</td>
                                                    <td>{{ $row->edit}}</td>


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
