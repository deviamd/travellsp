@extends('layouts.home')
@section('title')

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
                <h4 class="card-title">Edit Transaksi</h4>

                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                                     </ul>
                                                </div>
                                                @endif
                                        <form class="custom-validation" method="POST" action="{{ route('transaksi.update',[$transaksi->id]) }}" novalidate="">
                                            @csrf
                                            {{-- <input type="hidden" name="_method" value="PUT"> --}}
                                            {{ method_field('PUT') }}



                                            {{-- <div class="mb-3">
                                                <label>Id</label>
                                                <div class="">
                                                    <select name="pemesanan_id" class="form-control">
                                                       <option value="{{ $transaksi->travel_package->id }}">{{ $transaksi->travel_package->id }}</option>
                                                       @foreach ($travel_package as $row)
                                                       <option value="{{$row->id}}">{{$row->id}}</option>
                                                       @endforeach
                                                   </select>
                                                   </div> --}}
                                            <div class="mb-3">
                                                <label>Addtional Visa</label>
                                                <div>
                                                    <input type="text" name="addtional_visa" class="form-control" required="" value="{{ $transaksi->addtional_visa}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Transaksi Total</label>
                                                <div>
                                                    <input type="text" name="total_transaksi" class="form-control" required=""  value="{{ $transaksi->transaksi_total}}">
                                                </div>
                                            </div>
                                           <div class="mb-3">
                                <div class="name">Status</div>
                                <div class="value">
                                    <select name="status_transaksi" class="form-control">
                                        <option value="opt1">Pilih Status</option>
                                        <option value="1">Sudah</option>
                                        <option value="2">Belum</option>
                                    </select>
                                </div>
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
