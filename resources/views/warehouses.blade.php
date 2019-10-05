@extends('master.layout')

@section('title','Warehouse')

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
    @if(empty($warehouses))
    <p>No data</p>
  @else
    <table class="table table-striped">
      <thead>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone number</th>
        <th scope="col">Stockkeeper id</th>
      </thead>
      <tbody>
        @foreach($warehouses as $warehouse)
          <tr>
            <td>{{$warehouse['name']}}</td>
            <td>{{$warehouse['address']}}</td>
            <td>{{$warehouse['phone_number']}}</td>
            <td>{{$warehouse['stockkeeper_id']}}</td>
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

