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
                    <th>formateur</th>
                    <th>langue</th>
                    <th>desc</th>
                    <th>desc</th>
                    <th>desc</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($formations as $formation)
                  <tr>
                    <td>{{$formation->id }}</td>
                    <td>{{$formation->titre }}</td>
                    <td>{{$formation->prix }}</td>
                    <td>{{$formation->stars }}</td>
                    <td>{{$formation->langue }}</td>
                    <td>{{$formation->description }}</td>
                    <td>{{$formation->detail }}</td>
                    <td>{{$formation->detail }}</td>
                    <td><a class="btn btn-sm btn-primary btn-raised" href="{{route('editformation',$formation->id)}}">modifier</a> || 
<form method="POST" action="{{route('deleteformation',$formation->id)}}">
{{csrf_field()}}
{{method_field('delete')}}  
<button><a class="btn btn-sm btn-danger btn-raised" href="">supp.</a></button>
</form> || <a class="btn btn-sm btn-warning btn-raised" href="/evaluation">Evaluation</a>
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