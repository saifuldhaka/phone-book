@extends('layouts.app')
@section('title', 'Phone Number Details')
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
                <a class="btn-circle btn btn-secondary" href="{{ route('phonebook.index') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
</a>
                <a class="btn-circle btn btn-primary" href="{{ route('phonebook.edit', $phonebook) }}"><i class="fa fa-pencil" aria-hidden="true"></i>
</a>
                <form action="{{ route('phonebook.destroy', $phonebook) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-circle btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
</button>
                </form>
            </div>
        </div>
    </div>
@endsection
