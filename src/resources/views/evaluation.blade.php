@extends('layouts.backend.main')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Quiz de Evaluation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="{{ route('evastore')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                                          <input type="hidden" name="id_formation" value="0">
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Formation</label>
                        <select name="formation" class="form-control">
                        @foreach($formations as $formation)
                         <option value="{{$formation->titre }}">{{$formation->titre }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Question 1:</label>
                        <input type="text" name="qun" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Question 2:</label>
                        <input type="text" name="qdeux" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Question 3:</label>
                        <input type="text" name="qtrois" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Question 4:</label>
                        <input type="text" name="qquatre" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Question 5:</label>
                        <input type="text" name="qcinq" class="form-control" placeholder="Enter ...">
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