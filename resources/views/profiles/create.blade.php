@extends('layouts.app')

@section('title', 'Add new Data')

@section('body')
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add new Data Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.store') }}" method="post" id="formSubmit">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}"
                                value="{{ old('name') }}" placeholder="Enter your name..">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control {{ $errors->has('gender') }}">
                                    <option>Choose your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control {{ $errors->has('age') ? 'is-invalid': '' }}"
                                value="{{ old('age') }}" placeholder="Enter your age..">
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="religion">Religion</label>
                                <select name="religion" id="religion" class="form-control {{ $errors->has('religion') }}">
                                    <option>Choose your religion</option>
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
                                placeholder="Enter your address..">{{ old('address') }}</textarea>
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="school">School</label>
                                <input type="text" name="school" id="school" class="form-control {{ $errors->has('school') ? 'is-invalid': '' }}"
                                value="{{ old('school') }}" placeholder="Enter your school..">
                                <span class="text-danger">{{ $errors->first('school') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <select name="class" id="class" class="form-control {{ $errors->has('class') }}">
                                    <option>Choose your class</option>
                                    <option value="XII RPL 1">XII RPL 1</option>
                                    <option value="XII RPL 2">XII RPL 2</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btnSubmit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
