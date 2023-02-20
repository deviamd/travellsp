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
                                    <ol class="breadcrumb m-9">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- end page title -->
                    <div>
                        <a class="btn btn-primary waves-effect waves-light mt-5 mb-4" href="{{ route('transaksi_detail.create')}}" role="button"> Create (+)</a>
                        <a class="btn btn-danger waves-effect waves-light  mt-5 mb-4" href="/laporan" role="button"> laporan pdf</a>
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
                                                    <th>Edit</th>
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
                                                    <td>
                                                        <form method="post" action="{{ route('transaksi_detail.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->id}}?')">
                                                            @csrf
                                                        {{ method_field('DELETE') }}
                                                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi_detail.edit',[$row->id]) }}" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                                <i class="fas fa-trash-alt"></i></button>
                                                                {{-- <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.show',[$row->id]) }}" title="Lihat"> --}}
                                                                {{-- <i class="fas fa-eye"></i> --}}
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
