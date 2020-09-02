@extends('layouts.backend.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste de réponse Quiz</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Email:</th>
                    <th>Formation:</th>
                    <th>Réponse 1:</th>
                    <th>Réponse 2:</th>
                    <th>Réponse 3:</th>
                    <th>Réponse 4:</th>
                    <th>Réponse 5:</th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($repevaluations as $repevaluation)
                  <tr>
                    <td>{{$repevaluation->email }}</td>
                    <td>{{$repevaluation->formation }}</td>
                    <td>{{$repevaluation->rqun }}</td>
                    <td>{{$repevaluation->rqdeux }}</td>
                    <td>{{$repevaluation->rqtrois }}</td>
                    <td>{{$repevaluation->rqquatre }}</td>
                    <td>{{$repevaluation->rqcinq }}</td>
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