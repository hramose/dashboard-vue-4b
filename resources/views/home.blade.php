@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Your name is: <b>{{$user->name}}</b> <br>
                    @role('admin')
                        You are: <b>Admin</b>
                        {{-- user has admin role --}}
                    @endrole
                    <br>
                    @permission('create.users')
                        You can: <b>Create users</b>
                    @endpermission
                </div>
            </div>
        </div>

        <example-component></example-component>
    </div>
</div>
@endsection
