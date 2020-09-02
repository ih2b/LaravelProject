@extends('layouts.backend.main')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
         <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Catégorie</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
    @foreach($categories as $categorie)
                  <tr>
                    <td>{{$categorie->id }}</td>
                    <td>{{$categorie->titre }}</td>
                    <td><a class="btn btn-sm btn-primary btn-raised" href="">modifier</a>  <form method="POST" action="" style="display: none;" >
{{csrf_field()}}
{{method_field('delete')}}  </form>
<button><a class="btn btn-sm btn-danger btn-raised" href="">supp.</a></button>
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