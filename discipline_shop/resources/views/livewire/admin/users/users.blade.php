@extends('layouts\dashboard_master')

@section('content')
<div class="row mt-3">
    <div class="col-lg-12 m-auto">
        <div class="card ">
            <div class="card-header ">
                <h1>Users</h1>
                </div>
                <div class="card-body">
    <div>
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>

            @endforeach
        </table>
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
  @endsection
