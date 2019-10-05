@extends('master.layout')

@section('title','index')

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
<!--   @if(empty($users))
    <p>No data</p>
  @else -->
<!--     <table class="table table-striped">
      <thead>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birthday</th>
        <th scope="col">Phone number</th>
        <th scope="col">Role</th>
      </thead>
      <tbody> -->
        <!-- @foreach($users as $user) -->
<!--       <tr>
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
          </tr> -->
        <!-- @endforeach -->
<!--       </tbody>
    </table>
  @endif -->

  <!-- Start findbyid -->

  <!-- @if(empty($users_id))
    <p>No data</p>
  @else
    <table>
      <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birthday</th>
        <th scope="col">Phone number</th>
        <th scope="col">Role</th>
    </table>
    <tbody>
          <tr>
            <td>{{$users_id['name']}}</td>
            <td>{{$users_id['email']}}</td>
            <td>{{$users_id['birth']}}</td>
            <td>{{$users_id['phone_number']}}</td>
            <td>@if($users_id['role']==0)
                    User
                  @elseif($users_id['role']==1)
                    Manager
                  @else
                    Administrator
                @endif
            </td>
          </tr>
      </tbody>
  @endif -->

  <!-- End findbyid -->


  <!-- Start findbyid -->


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
        @foreach($users as $user)
          <tr>
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
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif

  <!-- End findbyid -->

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
@endsection

