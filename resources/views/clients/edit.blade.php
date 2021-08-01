@extends('layouts.app')

@section('content')
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-header">Contact information</div>

            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="contact_name">Name</label>
                    <input class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" type="text" name="contact_name" id="contact_name" value="{{ old('contact_name', $client->contact_name) }}" required>
                    @if($errors->has('contact_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact_name') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label class="required" for="contact_email">Email</label>
                    <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="text" name="contact_email" id="contact_email" value="{{ old('contact_email', $client->contact_email) }}" required>
                    @if($errors->has('contact_email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact_email') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label for="contact_phone_number">Phone number</label>
                    <input class="form-control {{ $errors->has('contact_phone_number') ? 'is-invalid' : '' }}" type="text" name="contact_phone_number" id="contact_phone_number" value="{{ old('contact_phone_number', $client->contact_phone_number) }}">
                    @if($errors->has('contact_phone_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact_phone_number') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Company information</div>
            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="company_name">Company name</label>
                    <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $client->company_name) }}" required>
                    @if($errors->has('company_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_name') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label class="required" for="company_vat">Company vat</label>
                    <input class="form-control {{ $errors->has('company_vat') ? 'is-invalid' : '' }}" type="text" name="company_vat" id="company_vat" value="{{ old('company_vat', $client->company_vat) }}" required>
                    @if($errors->has('company_vat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_vat') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label class="required" for="company_address">Company address</label>
                    <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $client->company_address) }}" required>
                    @if($errors->has('company_address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_address') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label class="required" for="company_city">Company city</label>
                    <input class="form-control {{ $errors->has('company_city') ? 'is-invalid' : '' }}" type="text" name="company_city" id="company_city" value="{{ old('company_city', $client->company_city) }}" required>
                    @if($errors->has('company_city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_city') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label class="required" for="company_zip">Company zip</label>
                    <input class="form-control {{ $errors->has('company_zip') ? 'is-invalid' : '' }}" type="text" name="company_zip" id="company_zip" value="{{ old('company_zip', $client->company_zip) }}" required>
                    @if($errors->has('company_zip'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_zip') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </div>
        </div>
    </form>

@endsection
