@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                  <div class="card-header">{{ $companies->name }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('logos/'.$companies->logo) }}" alt="{{ $companies->name }} Logo" style="max-width: 100%">
                            </div>
                            <div class="col-md-6">
                                <p><strong>Email:</strong> {{ $companies->email }}</p>
                                <p><strong>Website:</strong> <a href="{{ $companies->website }}" target="_blank">{{ $companies->website }}</a></p>
                                <a href="{{ route('companies.edit', $companies->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('companies.destroy', $companies->id) }}" class="btn btn-danger">Delete</a>
                                <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
