@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Employee</h2>
            <form action="{{ route('employees.update', $employees->id) }}" method="POST">
                {{ csrf_field() }}
                <input id="employee_id" type="hidden" class="form-control" name="employee_id" value="{{ old('id', $employees->id) }}">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ $employees->first_name }}" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ $employees->last_name }}" required>
                </div>
                <div class="form-group">
                    <label for="companies_id">Company</label>
                    <select name="companies_id" class="form-control" required>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}" @if($company->id == $employees->companies_id) selected @endif>{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $employees->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" value="{{ $employees->phone }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Employee</button>
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
