@extends('layouts.app')
@section('title', 'Phone List')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Phonebook</h1>
                  <a class="btn btn-primary" href="{{ route('phonebook.index') }}">View All Contacts</a>
                  <a class="btn btn-primary" href="{{ route('phonebook.create') }}">Create new contact</a>

                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Phone Type</th>
                            <th>Number</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($phonebook as $entry)
                            <tr>
                                <td>{{ $entry->last_name }}</td>
                                <td>{{ $entry->first_name }}</td>
                                <td>{{ $entry->phone_type }}</td>
                                <td>{{ $entry->number }}</td>
                                <td>
                                    <!-- <a class="btn btn-secondary" href="{{ route('phonebook.show', $entry) }}">View</a>
                                    <a class="btn btn-primary" href="{{ route('phonebook.edit', $entry) }}">Edit</a>
                                    <form action="{{ route('phonebook.destroy', $entry) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="d-flex justify-content-center">
                    {{ $phonebook->links('vendor.pagination.custom') }}

                </div>

            </div>
        </div>
    </div>
@endsection
