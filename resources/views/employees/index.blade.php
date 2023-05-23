@extends('layout')

@section('content')
<style>
    .mb-3{
        margin: 25px;
    }
</style>
    <div class="container">
        <div class="mb-3">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
          </div>
          <div align ="right">
            <a href="{{ route('companies.index') }}">Back to companies</a>
          </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Employees</b></div>
                    <div class="card-body">
                        <table class="table" border="3">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                {{-- {{ dd($employee->companies) }} --}}
                                    <tr>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                        <td>{{ !empty($employee->companies) ? $employee->companies->name : '' }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        <td>
                                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('employees.destroy', $employee->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
