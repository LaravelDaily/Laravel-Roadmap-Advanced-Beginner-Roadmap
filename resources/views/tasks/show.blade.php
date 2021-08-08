@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Client</div>

                <div class="card-body d-flex justify-content-between">
                    <div>
                        <div class="text-primary">{{ $task->client->contact_name }}</div>
                        <p class="mb-0">{{ $task->client->contact_email }}</p>
                        <p>{{ $task->client->contact_phone_number }}</p>
                    </div>
                    <div>
                        <p class="mb-0">{{ $task->client->company_name }}</p>
                        <p class="mb-0">{{ $task->client->company_address }}</p>
                        <p class="mb-0">{{ $task->client->company_city }}, {{ $task->client->company_zip }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Assigned user</div>

                <div class="card-body">
                    <p class="mb-0">{{ $task->user->full_name }}</p>
                    <p class="mb-0">{{ $task->user->email }}</p>
                    <p class="mb-0">{{ $task->user->phone_number }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-accent-primary">
                <div class="card-header">{{ $task->title }}</div>

                <div class="card-body">
                    <p>{{ $task->description }}</p>
                </div>

                <div class="card-footer">
                    <p class="mb-0">Created at {{ $task->created_at->format('M d, Y H:m') }}</p>
                    <p class="mb-0">Updated at {{ $task->updated_at->format('M d, Y H:m') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-accent-primary">
                <div class="card-header">Information</div>

                <div class="card-body">
                    <p class="mb-0">Deadline {{ $task->deadline }}</p>
                    <p class="mb-0">Created at {{ $task->created_at->format('M d, Y') }}</p>
                    <p class="mb-0">Status {{ ucfirst($task->status) }}</p>
                </div>
            </div>
        </div>

@endsection
