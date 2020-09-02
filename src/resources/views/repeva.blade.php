@extends('layouts.main')
@section('content')
 
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <h2>QUIZ</h2>
            </div>
          </div>
        </div>
        <div class="card-body">
                <form role="form" action="{{ route('repeval')}}" method="POST" enctype="multipart/form-data">
                   @csrf
<input type="hidden" name="email" value="{{Auth::user()->email }}">
<input type="hidden" name="formation" value="{{ $format->titre }}">

        @foreach($evaluations as $evaluation)
              @if($evaluation->formation == $format->titre)



                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label> {{$evaluation->qun}}</label>
                        <input type="text" name="rqun" class="form-control" >
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label> {{$evaluation->qdeux}}</label>
                        <input type="text" name="rqdeux" class="form-control" >
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label> {{$evaluation->qtrois}}</label>
                        <input type="text" name="rqtrois" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label> {{$evaluation->qquatre}}</label>
                        <input type="text" name="rqquatre" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label> {{$evaluation->qcinq}}</label>
                        <input type="text" name="rqcinq" class="form-control" >
                      </div>
                    </div>
                  </div>
@endif
@endforeach


                       <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
      </div>
    </div>

@endsection