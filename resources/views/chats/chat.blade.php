@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row shadow p-2" style="height:100vh">
            <div class="col-sm-4">
                <div class="card shadow">
                    <div class="card-header text-dark fw-bold bg-light">
                        Users
                    </div>
                    <div class="card-body">
                        <ul style="list-style: none">
                            <li>Jitendra</li>
                            <hr>
                            <li>Mohit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                @if (isset($message))
                    <div class="alert alert-success">
                        {{ $message ?? '' }}
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header text-dark fw-bold bg-light">
                        Chat
                    </div>
                    <div class="card-body">

                        <form action="{{ route('sendMessage') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="message" placeholder="Enter message">
                            </div>
                            <br>
                            <button class="btn btn-default border">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
