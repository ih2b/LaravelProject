@extends('layouts.backend.main')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Mail</th>
                    <th>Numéro</th>
                    <th>Message</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($messages as $message)
                  <tr>
                    <td>{{$message->id }}</td>
                    <td>{{$message->nom }}</td>
                    <td>{{$message->prenom }}</td>
                    <td>{{$message->mail }}</td>
                    <td>{{$message->numero }}</td>
                    <td>{{$message->message }}</td>
                    <td> 
<form method="POST" action="{{route('deletecontact',$message->id)}}">
{{csrf_field()}}
{{method_field('delete')}}  
<button><a class="btn btn-sm btn-danger btn-raised" href="">supp.</a></button>
</form>
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