@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <b class="text-muted">Employee Data</b>
                    <a href="/" class="btn btn-sm btn-danger">Back</a>
                </div>
                <div class="card-body">
                    {{-- HTML HERE  --}}
                    <form method="POST" action="{{ route('store') }}">
                        @csrf
                        <div class="form-group mb-2">
                          <label for="exampleFormControlInput1">Employee Name</label>
                          <input type="text" value="{{ old('emp_name') }}" name="emp_name" class="form-control" id="exampleFormControlInput1" placeholder="Employee Name">
                          @error('emp_name')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleFormControlInput1">Employee Address</label>
                            <input type="text" value="{{ old('emp_address') }}" name="emp_address" class="form-control" id="exampleFormControlInput1" placeholder="Employee Address">
                            @error('emp_address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Company</label>
                          <select class="form-control" name="company_id" id="exampleFormControlSelect1">
                            <option seleted>-Select-</option>
                            @forelse ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->co_name }}</option>
                            @empty
                                
                            @endforelse
                          </select>
                        </div>

                        <button class="mt-1 btn btn-primary">Add</button>

                      </form>
                </div>
            </div>
        </div>
    </div>

@endsection