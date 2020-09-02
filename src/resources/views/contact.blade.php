@extends('layouts.main')
@section('content')
 
  <div>
    <img src="images/checkhands.jpg" style="width:100%">
        <div class="row align-items-center justify-content-center text-center">
        <h1 class="centered mb-4" data-aos="fade-up" data-aos-delay="100">CONTACT</h1>
        </div>
  </div>
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <h2>LAISSEZ-NOUS UN MESSAGE</h2>
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
            <form role="form" action="{{ route('storecontact')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" name="nom" class="form-control" placeholder="Votre Nom">
                </div>
                <div class="col-md-6">
                  <input type="text" name="prenom" class="form-control" placeholder="Votre Prénom">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="mail" class="form-control" placeholder="votre email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="numero" class="form-control" placeholder="votre numéro de téléphone">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" class="form-control" placeholder="pourquoi voulez vous faire cette formation" cols="30" rows="10"></textarea>
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