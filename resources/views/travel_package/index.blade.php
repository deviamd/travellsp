@extends('layouts.home')
@section('content')


<!-- ini untuk isi home -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    <h4 class="card-title">Data Travel Package</h4>
                        <!-- end page title -->
                        <div>
                            <a class="btn btn-primary waves-effect waves-light mt-4 mb-4" href="{{ route('travel_package.create')}}" role="button"> Create (+)</a>
                        </p>
                        </div>

                        <!-- fungsi cart -->
                        <form method="get" action="{{route('travel_package.index')}}">
                            <div class="form-group">

                        </table>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>Id</th>
                                                        <th>Slug</th>
                                                        <th>Title</th>
                                                        <th>Location</th>
                                                        <th>Language</th>
                                                        <th>Departure Date</th>
                                                        <th>Duration</th>
                                                        <th>Type</th>
                                                        <th>Price</th>
                                                        <th>Qty</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($travel_package as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($travel_package->perpage() *  ($travel_package->currentPage() -1)) }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->slug }}</td>
                        <td>{{ $row->location }}</td>
                        <td>{{ $row->language }}</td>
                        <td>{{ $row->departure_date }}</td>
                        <td>{{ $row->duration }}</td>
                        <td>{{ $row->type}}</td>
                        <td>{{ $row->price}}</td>
                        <td>{{ $row->qty}}</td>
                        <td>
                        <form method="post" action="{{ route('travel_package.destroy',[$row->id]) }}" onsubmit="return confirm('Are you sure to delete, {{$row->name}}?')">
                                @csrf
                            {{ method_field('DELETE') }}
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('travel_package.edit',[$row->id]) }}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>

                             <button type="submit" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('travel_package.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                </form>

                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $travel_package->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
