@extends('master.layout')

@section('title','create')

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
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birthday</th>
        <th scope="col">Phone number</th>
        <th scope="col">Role</th>
      </thead>
      <tbody>
      <tr>
            <td>{{$users['name']}}</td>
            <td>{{$users['email']}}</td>
            <td>{{$users['birth']}}</td>
            <td>{{$users['phone_number']}}</td>
            <td>@if($users['role']==0)
                    User
                  @elseif($users['role']==1)
                    Manager
                  @else
                    Administrator
                @endif
            </td>
          </tr>
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

