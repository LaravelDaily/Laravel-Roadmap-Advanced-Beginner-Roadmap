@extends('layouts.app')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-header">Create project</div>

            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="title">Title</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title') }}" required>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label class="required" for="description">Description</label>
                    <textarea class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" rows="10" name="description" id="description">{{ old('description') }}</textarea>
                    @if($errors->has('contact_email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact_email') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input class="form-control {{ $errors->has('deadline') ? 'is-invalid' : '' }}" type="date" name="deadline" id="deadline" value="{{ old('deadline') }}">
                    @if($errors->has('deadline'))
                        <div class="invalid-feedback">
                            {{ $errors->first('deadline') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label for="user_id">Assigned user</label>
                    <select class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                        @foreach($users as $id => $entry)
                            <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('user_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('user') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label for="client_id">Assigned client</label>
                    <select class="form-control {{ $errors->has('client_id') ? 'is-invalid' : '' }}" name="client_id" id="client_id" required>
                        @foreach($clients as $id => $entry)
                            <option value="{{ $id }}" {{ old('client_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('client_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('client_id') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                        @foreach(App\Models\Project::STATUS as $status)
                            <option
                                value="{{ $status }}" {{ old('status') == $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block"> </span>
                </div>

                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </div>
        </div>
    </form>

@endsection
