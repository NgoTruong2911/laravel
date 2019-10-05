@extends('master.layout')

@section('title','Add')

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

    <!-- Main content -->
    <section class="content container-fluid">

  <form action="{{route('users.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    @error('email')
      {{$message}}
    @enderror
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="birth">Birthday</label>
    <input type="date" name="birth" class="form-control" id="birth" placeholder="Enter birthday">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone number</label>
    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter Phone number">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="role">Role</label>
    <select class="form-control" name="role" id="role">
      <option value="0">Người dùng</option>
      <option value="1">Mod</option>
      <option value="2">Admin</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    </section>
    <!-- /.content -->
  </div>
@endsection

