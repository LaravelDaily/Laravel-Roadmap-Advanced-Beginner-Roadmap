@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('tasks.create') }}">
                Create task
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Tasks list</div>

        <div class="card-body">
            <table class="table table-responsive-sm table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Assigned to</th>
                    <th>Client</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->user->name }}</td>
                        <td>{{ $task->client->company_name }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td>{{ $task->status }}</td>
                        <td>
                            <a class="btn btn-xs btn-info" href="{{ route('tasks.edit', $task) }}">
                                Edit
                            </a>
                            @can('delete')
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
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

            {{ $tasks->links() }}
        </div>
    </div>

@endsection
