@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Company') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('companies.update') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- @method('PUT') --}}
                             <input id="company_id" type="hidden" class="form-control" name="company_id" value="{{ old('id', $companies->id) }}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $companies->name) }}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $companies->email) }}" autocomplete="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                                <div class="col-md-6">
                                    @if ($companies->logo)
                                        <img src="{{ asset('logos/' . $companies->logo) }}" alt="{{ $companies->name }}" style="max-width: 100%">
                                    @else
                                        <p>No logo uploaded yet.</p>
                                    @endif
                                    <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                                <div class="col-md-6">
                                    <input id="website" type="url" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website', $companies->website) }}" autocomplete="website">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('companies.show', $companies->id) }}" class="btn btn-secondary">
                                        {{ __('Cancel') }}
                                    </a>
                                </div>
                            </div>   
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
