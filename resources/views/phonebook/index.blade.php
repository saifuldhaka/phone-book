@extends('layouts.app')
@section('title', 'Phone List')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                    <h1>Phonebook</h1>
                </div>
                <div class="col-md-6">
                  <form action="{{ route('phonebook.index') }}" method="GET" class="mb-3">
                      <div class="input-group">
                          <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ request('search') }}">
                          <button class="btn btn-outline-secondary" type="submit">Search</button>
                      </div>
                  </form>
                </div>

              </div>



                <hr>
                <div style="overflow-x: auto;">
                  <table class="table" >
                      <thead>
                          <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Phone Type</th>
                              <th>Number</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($phonebook as $entry)
                              <tr>
                                  <td>{{ $entry->first_name }}</td>
                                  <td>{{ $entry->last_name }}</td>
                                  <td>{{ $entry->phone_type }}</td>
                                  <td>{{ $entry->number }}</td>
                                  <td>
                                      <a class="btn-circle btn btn-secondary" href="{{ route('phonebook.show', $entry) }}"><i class="fa fa-eye"></i></a>
                                      <a class="btn-circle btn btn-primary" href="{{ route('phonebook.edit', $entry) }}"><i class="fa fa-pencil" aria-hidden="true"></i>
</a>
                                      <form action="{{ route('phonebook.destroy', $entry) }}" method="POST" style="display: inline;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn-circle btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
</i></button>
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>

                </div>


                <div class="d-flex justify-content-center">
                    {{ $phonebook->links('vendor.pagination.custom') }}

                </div>

            </div>
        </div>
    </div>
@endsection
