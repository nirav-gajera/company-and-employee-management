@extends('layout')

@section('content')
<style>
    .mb-3{
        margin: 25px;

    }
</style>
<div class="container">
    <div class="mb-3">
        <a href="{{ route('companies.create') }}" class="btn btn-primary">Add company </a>
      
      {{-- <div align ="right"> --}}
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Employees </a>
      </div>
      
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Companies</b></div>
                <div class="card-body">
                    <table class="table" border="3">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Website</th>
                                <th>Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td><img src="{{ asset('logos/'.$company->logo)  }}" width="50" height="50" alt="{{ $company->name }} "></td>
                                <td>{{ $company->website }}</td>
                                <td>
                                    <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary">view</a>
                                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('companies.destroy', $company->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $companies->links() }}
                </div>
                <div class="card-footer text-right">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">{{ __('Logout') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
