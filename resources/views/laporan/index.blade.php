@extends('layouts.home')
@section('title')
Laporan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="card">

                                            <div class="card-header">
                                                <h5>Laporan Table</h5>
                                                <div class="card-header-right">
                                                </div>
                                            </div>
                                            <div class="ml-3">
                                                <!--a class="btn btn-info waves-effect waves-light" href="/laporan/create" role="button"> Create (+)</a>-->
                                                <a href="/laporan/pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                                                </div>

                                            <div class="card-block table-blaporan-style">
                                                <div class="table-responsive">

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Transaksi Id</th>
                                                                <th>Username</th>
                                                                <th>Nationality</th>
                                                                <th>Is visa</th>
                                                                <th>Doe Passport</th>


                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($laporan as $row)
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{$row->transaksi_id}}</td>
                                                            <td>{{ $row->username}}</td>
                                                            <td>{{ $row->nationality}}</td>
                                                            <td>{{ $row->is_visa}}</td>
                                                            <td>{{ $row->doe_passport}}</td>

                                                            <td>

                                                        </tr>

                                                    </td>


                                                </tr>
                    @endforeach
                                                        </tbody>
                                                        {{ $laporan->appends(Request::all())->links() }}
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
@endsection
