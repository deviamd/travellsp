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
                        <a class="btn btn-primary waves-effect waves-light mt-5 mb-4" href="{{ route('transaksi.create')}}" role="button"> Create (+)</a>
                        <a class="btn btn-danger waves-effect waves-light  mt-5 mb-4" href="/laporan/pdf" role="button"> laporan pdf</a>
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
                                                    <th>Travel Packages Id</th>
                                                    <th>User Id</th>
                                                    <th>Addtional Visa</th>
                                                    <th>Total Transaksi</th>
                                                    <th>Status Transaksi</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transaksis as $row)
                                                <tr>

                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->user_id}}</td>
                                                    <td>{{ $row->travel_package_id}}</td>
                                                    <td>{{ $row->addtional_visa}}</td>
                                                    <td>{{ $row->total_transaksi}}</td>
                                                    <td>{{ $row->status_transaksi}}</td>
                                                    <td>{{ $row->edit}}</td>

                                                    <td>
                                                        <form method="post" action="{{ route('transaksi.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->nama}}?')">
                                                            @csrf
                                                        {{ method_field('DELETE') }}
                                                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.edit',[$row->id]) }}" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                                <i class="fas fa-trash-alt"></i></button>
                                                                <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.show',[$row->id]) }}" title="Lihat">
                                                                <i class="fas fa-eye"></i>
                                                                </a>
                                                        </form>
                                                    </td>
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
