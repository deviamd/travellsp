@extends('layouts.home')
@section('title')
User
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
                                        {{-- @include('alert.eror') --}}
                        <h4 class="card-title">User</h4>
                        <form class="custom-validation" method="POST" action="{{ route('user.store') }}" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" required="" class="form-control" required="" placeholder="Silahkan input nama">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <div>
                                    <input type="email" name="email" required="" class="form-control" required="" parsley-type="email" placeholder="Silahkan masukan email yang benar">
                                </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <div>
                                    <input parsley-type="url" type="password" name="password" class="form-control" required="">
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
