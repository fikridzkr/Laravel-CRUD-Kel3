

@extends('layouts.app')

@section('title', 'Edit data Profile {{ $data->name }}')

@section('body')
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data {{ $data->name }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("favorite/$data->id") }}" method="post" id="formSubmit">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}"
                                value="{{ $data->name }}" readonly placeholder="Enter your name..">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control {{ $errors->has('age') ? 'is-invalid': '' }}"
                                value="{{ $data->age }}" readonly placeholder="Enter your age..">
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="artist">Favorite Artist</label>
                                <input type="text" name="artist" id="artist" class="form-control {{ $errors->has('artist') ? 'is-invalid': '' }}"
                                value="{{ $data->artist }}" readonly placeholder="Enter your school..">
                                <span class="text-danger">{{ $errors->first('artist') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="song">Favorite Song</label>
                                <input type="text" name="song" id="song" class="form-control {{ $errors->has('song') ? 'is-invalid': '' }}"
                                value="{{ $data->song }}" readonly placeholder="Enter your school..">
                                <span class="text-danger">{{ $errors->first('song') }}</span>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary btn-edit">Edit</button>
                                <button type="button" class="btn btn-success btnSubmit btn-update" disabled>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
