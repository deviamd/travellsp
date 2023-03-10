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
                                        <form  method="POST" action="{{ route('transaksi.update',[$transaksi->id]) }}" class="custom-validation" novalidate="">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">



                                            <div class="mb-3">
                                                <label>Name</label>
                                                <div class="">
                                                    <select name="user_id" class="form-control">

                                                       @foreach ($users as $row)
                                                       <option value="{{$row->id}}">{{$row->name}}</option>
                                                       @endforeach
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Title</label>
                                                <div class="value">
                                                    <select name="travel_package_id" class="form-control">
                                                        <option value="">Choose</option>
                                                        @foreach ($travel as $row)
                                                        <option value="{{ $row->id }}"  >{{$row->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Addtional Visa</label>
                                                <div>
                                                    <input type="text" name="addtional_visa" class="form-control" required="" value="{{ $transaksi->addtional_visa}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Transaksi Total</label>
                                                <div>
                                                    <input type="text" name="total_transaksi" class="form-control" required=""  value="{{ $transaksi->total_transaksi}}">
                                                </div>
                                            </div>
                                           <div class="mb-3">
                                <div class="name">Status</div>
                                <div class="value">
                                    <select name="status_transaksi" class="form-control">
                                        <option value="opt1">Pilih Status</option>
                                        <option value="1" {{ $transaksi->status_transaksi == "sudah" ? "selected" : "" }}>Sudah</option>
                                        <option value="2" {{ $transaksi->status_transaksi == "belum" ? "selected" : "" }}>Belum</option>
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
