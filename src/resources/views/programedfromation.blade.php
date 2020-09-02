@extends('layouts.backend.main')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des formations</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>prix</th>
                    <th>langue</th>
                    <th>desc</th>
                    <th>desc</th>
                    <th>desc</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($events as $ev)
                  <tr>
                    <td>{{$ev->title }}</td>
                  </tr>
  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
</div>
  
@endsection