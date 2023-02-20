@extends('layouts.home')
@section('title')
Transaksi Detail
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

                        <h4 class="card-title">Transaksi Detail</h4>
                        <form class="custom-validation" method="POST" action="{{ route('transaksi_detail.store') }}" novalidate="">
                            @csrf
                            @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
            </div>
            @endif

            <div class="mb-3">
                <label>Addtional Visa</label>
                <input type="hidden" name="transaksi_id" value="{{ Auth::user()->id }}">
                <div class="value">
                    <select name="transaksi_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach ($transaksi as $row)
                        <option value="{{ $row->id }}">{{$row->addtional_visa}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required="" placeholder="Silahkan input username">
                            </div>
                            <div class="mb-3">
                                <label>Nationality</label>
                                <input type="text" name="nationality" class="form-control" required="" placeholder="Silahkan input nationality">
                            </div>
                            <div class="mb-3">
                                <label>Is Visa</label>
                                <input type="text" name="is_visa" class="form-control" required="" placeholder="Silahkan input is visa">
                            </div>
                            <div class="mb-3">
                                <label>Doe Passport</label>
                                <input type="date" name="doe_passport" class="form-control" required="" placeholder="Silahkan input doe passport">
                            </div>
                            </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                     <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                     </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div> <!-- page-content -->
    </div> <!-- main-content -->
</div>
@endsection
