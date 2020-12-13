@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <b class="text-muted">Employee Data</b>
                    <a href="{{ route('create') }}" class="btn btn-sm btn-primary">Add Employee</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Company</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @forelse ($employees as $employee)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td><a class="text-decoration-none" href="{{ route('show', $employee->id) }}">{{ $employee->emp_name }}</a></td>
                                    <td>{{ $employee->emp_address }}</td>
                                    <td>{{ $employee->company->co_name }}</td>
                                    <td>
                                        <a href="{{ route('edit', $employee->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('destroy', $employee) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                            @empty
                                <td colspan="5">
                                    <h1 class="text-muted text-center">NO DATA <a href="{{ route('create') }}" class="text-primary text-decoration-none">CREATE NEW</a></h1>
                                </td>
                            @endforelse
                            
                        </tbody>
                      </table>
                      <div>
                        {{ $employees->links() }}
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection