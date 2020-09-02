@extends('layouts.main')
@section('content')
 
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>C'est toi qui choisi</span>
              <h2>TA PROCHAINE FORMATION</h2>
            </div>
          </div>
        </div>
         @if($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
                {{$error}}
              </div>
              @endforeach
              @endif
        <div class="row">
          <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form role="form" action="{{ route('storeproposition')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="mail" placeholder="Adresse Mail">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="domaine" placeholder="Domaine">
                </div>
              </div>
               <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="formation" placeholder="Formation souhaitée">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="commentaire" placeholder="pourquoi voulez vous faire cette formation" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5" >ENVOYER</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection