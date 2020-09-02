@extends('layouts.backend.main')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ajouter Catégorie</h3>
              </div>
              @if($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
                {{$error}}
              </div>
              @endforeach
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="{{ route('storecategorie')}}" method="POST" >
                   @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Titre</label>
                        <input type="text" name="titre" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                       <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
            </div>
  
@endsection