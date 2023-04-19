@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Phonebook Entry</h1>
                <hr>
                <p><strong>Last Name:</strong> {{ $phonebook->last_name }}</p>
                <p><strong>First Name:</strong> {{ $phonebook->first_name }}</p>
                <p><strong>Phone Type:</strong> {{ $phonebook->phone_type }}</p>
                <p><strong>Number:</strong> {{ $phonebook->number }}</p>
                <a class="btn btn-secondary" href="{{ route('phonebook.index') }}">Back</a>
                <a class="btn btn-primary" href="{{ route('phonebook.edit', $phonebook) }}">Edit</a>
                <form action="{{ route('phonebook.destroy', $phonebook) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
