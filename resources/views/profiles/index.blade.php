@extends('layouts.app')

@section('title', 'Profile')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title text-center" style="margin-top: 5% ;">
                    <h3>Data</h3>
                </div>
                <hr>
                <table class="table table-bordered table-striped table-responsive-sm" id="tableProfile">
                   <p style="display: inline-flex">
                        <a href="{{ route('profile.create') }}" class="btn btn-primary">Create New Profile</a>
                        @if (session()->get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Successfully</strong> {{ session()->get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                   </p>
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->age }}</td>
                            <td style="display: inline-flex">
                                <a href="{{ url("profile/{$item->id}/edit") }}" class="btn btn-primary btn-sm">Detail</a>
                                <form action="{{ url("profile/{$item->id}") }}" method="post" style="margin-left:5px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
