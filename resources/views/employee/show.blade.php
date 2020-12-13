@extends('layouts.app')
@section('content')
<style>
    span {
        display: block;
    }
</style>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-5">
            <div class="card-header d-flex justify-content-between">
                <b class="text-muted">{{ $employee->emp_name }}</b>
                <div>
                    <a href="{{ route('edit', $employee->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('destroy', $employee->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    <a href="/" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                {{-- HTML HERE  --}}
                <span>Name: {{ $employee->emp_name }}</span> 
                <span>Address: {{ $employee->emp_address }}</span> 
                <span>Company: {{ $employee->company->co_name }}</span> 
            </div>
        </div>
    </div>
</div>


@endsection