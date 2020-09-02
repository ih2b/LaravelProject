@extends('layouts.backend.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Question Quiz</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Formation:</th>
                    <th>Question 1:</th>
                    <th>Question 2:</th>
                    <th>Question 3:</th>
                    <th>Question 4:</th>
                    <th>Question 5:</th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($evaluations as $evaluation)
                  <tr>
                    <td>{{$evaluation->formation }}</td>
                    <td>{{$evaluation->qun }}</td>
                    <td>{{$evaluation->qdeux }}</td>
                    <td>{{$evaluation->qtrois }}</td>
                    <td>{{$evaluation->qquatre }}</td>
                    <td>{{$evaluation->qcinq }}</td>
                    <td><a class="btn btn-sm btn-primary btn-raised" href="/admin">sup.</a> ||  || <a class="btn btn-sm btn-warning btn-raised" href="/admin">modif.</a>
                       </td>
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