@extends('layouts.app')
@section('title', 'Create New Phone Number')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Phonebook Entry</h1>
                <hr>
                <form action="{{ route('phonebook.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                        @error('first_name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="phone_type">Phone Type:</label>
                        <select name="phone_type" id="phone_type" class="form-control" required>
                            <option value="">Select any ...</option>
                            @foreach ($phoneTypes as $phoneType)
                                <option value="{{ $phoneType }}">{{ $phoneType }}</option>
                            @endforeach
                        </select>
                        @error('phone_type')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="number">Number:</label>
                        <input type="text" class="form-control" id="number" name="number" required>
                        @error('number')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <br/>
                        <button type="submit" class="btn btn-primary">Create Entry</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
