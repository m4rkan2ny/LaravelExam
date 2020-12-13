@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <b class="text-muted">Edit - {{ $employee->emp_name }}</b>
                    <a href="/" class="btn btn-sm btn-danger">Back</a>
                </div>
                <div class="card-body">
                    {{-- HTML HERE  --}}
                    <form method="POST" action="{{ route('update', $employee->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Employee Name</label>
                          <input type="text" value="{{ $employee->emp_name }}" name="emp_name" class="form-control" id="exampleFormControlInput1" placeholder="Employee Name">
                          @error('emp_name')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Employee Address</label>
                            <input type="text" value="{{ $employee->emp_address }}" name="emp_address" class="form-control" id="exampleFormControlInput1" placeholder="Employee Name">
                            @error('emp_address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Company</label>
                          <select class="form-control" name="company_id" id="exampleFormControlSelect1">
                            @forelse ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->co_name }}</option>
                            @empty
                                <option disabled >-Select-</option>
                            @endforelse
                          </select>
                        </div>

                        <button class="mt-1 btn btn-primary">Update</button>

                      </form>
                </div>
            </div>
        </div>
    </div>

@endsection