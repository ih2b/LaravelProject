@extends('layouts.main')
@section('content')

      <div class = "container-fluid flex1" id = "Content">
        <div class="container">

          <div class="row">      
      <div class="site-section bg-light" id="pricing-section">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>NOS FORMATIONS</h2>

              </div>
            </div>  
          </div>
          <div class="row mb-5">
    @foreach($formations as $formation)
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 card" data-aos="fade-up" data-aos-delay="200" onclick="window.location.href='/forma/{{$formation->id}}'">
              <img onclick="window.location.href='/forma/{{$formation->id}}'" class="card-img-top " src="{{$formation->image }}" alt="Card image cap">
              <div class="pricing" onclick="window.location.href='/forma/{{$formation->id}}'">
                <h3 class="text-center text-black" >{{$formation->prix}}</h3>
                <div class="price text-center mb-4 ">
                  <span><span>{{$formation->titre}}</span></span>
                </div>
                   <p class="card-text">{{$formation->description }}</p>
                <p class="text-center">
                  @guest
<a href="/login" class="btn btn-secondary btn-md">Connexion</a>
       @endguest           
                  @auth
                  <form method="POST" action="{{route('inscription')}}">
@csrf
 <input type="hidden" name="email" value="{{Auth::user()->email}}">
<input type="hidden" name="formation" value="{{$formation->titre}}">
<button class="btn btn-secondary btn-md">s'inscrire</button>
</form>
@endauth
                </p>
              </div>
            </div>


  @endforeach
    </div>
        </div>
      </div>
        </div>
    </div>
    </div> <!-- Ende container-fluid flex1 -->

@endsection