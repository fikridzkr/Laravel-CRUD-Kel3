@extends('layouts.app')

@section('title', 'Add new Data')

@section('body')
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Add Data !</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('favorite.store') }}" method="post" id="formSubmit">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}"
                                value="{{ old('name') }}" placeholder="Enter your name..">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control {{ $errors->has('age') ? 'is-invalid': '' }}"
                                value="{{ old('age') }}" placeholder="Enter your age..">
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="artist">Favorite Artist</label>
                                <input type="text" name="artist" id="artist" class="form-control {{ $errors->has('artist') ? 'is-invalid': '' }}"
                                value="{{ old('artist') }}" placeholder="Enter Your Favorite Artist">
                                <span class="text-danger">{{ $errors->first('artist') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="song">Favorite Song</label>
                                <input type="text" name="song" id="song" class="form-control {{ $errors->has('song') ? 'is-invalid': '' }}"
                                value="{{ old('song') }}" placeholder="Enter Your Favorite Artist">
                                <span class="text-danger">{{ $errors->first('song') }}</span>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btnSubmit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
