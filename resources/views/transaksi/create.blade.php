@extends('layouts.home')
@section('title')
Transaksi
@endsection

<!-- ini untuk isi home -->
@section('content')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Transaksi</h4>
                        <form class="custom-validation" method="POST" action="{{ route('transaksi.store') }}" novalidate="">
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
                <label>Title</label>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="value">
                    <select name="travel_package_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach ($travel as $row)
                        <option value="{{ $row->id }}">{{$row->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label>Name</label>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="value">
                    <select name="user_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach ($user as $row)
                        <option value="{{ $row->id }}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                            <div class="mb-3">
                              <label>Addtional Visa</label>
                             <input type="text" name="addtional_visa" class="form-control" required="" placeholder="Silahkan input Additional Visa">
                          </div>
                            <div class="mb-3">
                                <label>Transaksi Total </label>
                                <input type="text" name="total_transaksi" class="form-control" required="" placeholder="Silahkan input Transaksi Total">
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


                                    </select>
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
