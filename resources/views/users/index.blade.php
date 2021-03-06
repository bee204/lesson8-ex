@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User List</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                            <tr>
                              <th scope="row">{{ $user->id }}</th>
                                <td>
                                    <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                                </td>
                              <td>{{ $user->email }}</td>
                              <td>
                                  <a href="{{ route('users.edit',['id' => $user->id]) }}" class="btn btn-info" role="button">Edit</a>
                                  <a href="{{ route('users.delete',['id' => $user->id]) }}" class="btn btn-info" role="button">Delete</a>

                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
