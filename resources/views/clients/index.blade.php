@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('clients.create') }}">
                Create client
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Clients list</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-responsive-sm table-striped">
                <thead>
                <tr>
                    <th>Company</th>
                    <th>VAT</th>
                    <th>Address</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->company_name }}</td>
                        <td>{{ $client->company_vat }}</td>
                        <td>{{ $client->company_address }}</td>
                        <td>
                            <a class="btn btn-xs btn-info" href="{{ route('clients.edit', $client) }}">
                                Edit
                            </a>
                            @can('delete')
                                <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $clients->withQueryString()->links() }}
        </div>
    </div>

@endsection
