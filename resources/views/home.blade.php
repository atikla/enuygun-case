@extends('layouts.app')
@section('style')
<style>
    .card-body {
        max-height: 400px;
        overflow-y: scroll;
    }
</style>
@endsection
@section('content')
<div class="mx-5">
    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <img src="https://i.pinimg.com/originals/e4/52/8f/e4528fef65ba1c5aca99df8bc9333e38.jpg" alt="" width="30" height="30" class="mr-3">
                        name: {{ $user->name }}, level: {{ $user->level }}, total time: {{ $user->totalTime }} h
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">task name</th>
                                <th scope="col">task difficulty</th>
                                <th scope="col">task duration</th>
                                <th scope="col">spent time</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->todo as $todo)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $todo['task_name'] }}</td>
                                        <td>{{ $todo['difficulty'] }}</td>
                                        <td>{{ $todo['duration'] }}</td>
                                        <td>{{ $todo['difficulty'] * $todo['duration'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
