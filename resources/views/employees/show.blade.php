@extends('layout')

@section('content')
<div class="container">
    <div align="right">
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a></div>
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $employees->first_name }} {{ $employees->last_name }}</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Company</td>
                        <td>{{ $employees->companies->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $employees->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $employees->phone }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('employees.edit', $employees->id) }}" class="btn btn-primary">Edit</a>
             <a href="{{ route('employees.destroy', $employees->id) }}" class="btn btn-danger">Delete</a>
            
        </div>
    </div>
</div>
@endsection
