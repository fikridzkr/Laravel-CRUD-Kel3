

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
                        <form action="{{ url("profile/$data->id") }}" method="post" id="formSubmit">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}"
                                value="{{ $data->name }}" readonly placeholder="Enter your name..">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control {{ $errors->has('gender') }}" disabled>
                                    <option value="{{ $data->gender }}">{{ $data->gender }}</option>
                                    <option>--------------------</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control {{ $errors->has('age') ? 'is-invalid': '' }}"
                                value="{{ $data->age }}" readonly placeholder="Enter your age..">
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="religion">Religion</label>
                                <select name="religion" id="religion" class="form-control {{ $errors->has('religion') }}" disabled>
                                    <option value="{{ $data->religion }}">{{ $data->religion }}</option>
                                    <option>--------------------</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('religion') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea rows="5" name="address" id="address" class="form-control {{ $errors->has('address') ? 'is-invalid': '' }}"
                            readonly placeholder="Enter your address..">{{ $data->address }}</textarea>
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="school">School</label>
                                <input type="text" name="school" id="school" class="form-control {{ $errors->has('school') ? 'is-invalid': '' }}"
                                value="{{ $data->school }}" readonly placeholder="Enter your school..">
                                <span class="text-danger">{{ $errors->first('school') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <select name="class" id="class" class="form-control {{ $errors->has('class') }}" disabled>
                                    <option value="{{ $data->class }}">{{ $data->class }}</option>
                                    <option>--------------------</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="XII RPL 1">XII RPL 1</option>
                                    <option value="XII RPL 2">XII RPL 2</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('class') }}</span>
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
