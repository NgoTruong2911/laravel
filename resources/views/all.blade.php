@extends('master.layout')

@section('title','all')

@section('contents')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
  @if(empty($users))
    <p>No data</p>
  @else
    <table class="table table-striped">
      <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birthday</th>
        <th scope="col">Phone number</th>
        <th scope="col">Role</th>
        <th scope="col"><a href="{{route('users.create')}}" class="btn btn-success">Add +</a></th>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['birth']}}</td>
            <td>{{$user['phone_number']}}</td>
            <td>@if($user['role']==0)
                    User
                  @elseif($user['role']==1)
                    Manager
                  @else
                    Administrator
                @endif
            </td>
            <td><a href="#" class="btn btn-primary">Update</a></td>
            <td><a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif


    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
@endsection

