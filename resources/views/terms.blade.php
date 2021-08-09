@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Accept terms</div>

        <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam commodi culpa cum doloribus, illum in
            iure iusto, numquam odio quam quibusdam quo repellendus sit, velit. Harum minima nobis recusandae?

            <form class="mt-4" action="{{ route('terms.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input {{ $errors->has('accept_terms') ? 'is-invalid' : '' }}"
                               type="checkbox" id="accept_terms" name="accept_terms" value="1">
                        <label class="form-check-label" for="accept_terms">Accept terms</label>
                    </div>
                    @if($errors->has('accept_terms'))
                        <div class="invalid-feedback" style="display: block;">
                            {{ $errors->first('accept_terms') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
