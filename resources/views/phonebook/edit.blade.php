@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Phonebook Entry</h1>
                <hr>
                <form action="{{ route('phonebook.update', $phonebook) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $phonebook->last_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $phonebook->first_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_type">Phone Type:</label>
                        <select name="phone_type" id="phone_type" class="form-control" required>
                          <option value="">Select any ...</option>
                          @foreach ($phoneTypes as $phoneType)
                              <option value="{{ $phoneType }}" {{ $phoneType == $phonebook->phone_type ? 'selected' : '' }}>{{ $phoneType }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="number">Number:</label>
                        <input type="text" class="form-control" id="number" name="number" value="{{ $phonebook->number }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Entry</button>
                </form>
            </div>
        </div>
    </div>
@endsection
