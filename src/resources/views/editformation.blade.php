@extends('layouts.backend.main')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ajouter une Formation</h3>
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
                <form role="form" action="{{ route('updateformation',$formation->id)}}" method="POST">
                   @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Titre</label>
                        <input type="text" name="titre" value="{{$formation->title}}" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Prix</label>
                        <input type="text" name="prix" value="{{$formation->prix}}" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>stars</label>
                        <input type="text" name="stars" value="{{$formation->stars}}" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>langue</label>
                        <input type="text" name="langue" value="{{$formation->langue}}" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>description</label>
                        <input type="text" name="description" value="{{$formation->description}}" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>detail</label>
                        <input type="text" name="detail" value="{{$formation->detail}}" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
            </div>
@endsection