@extends('layouts.main')
@section('content')
      <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">
     		<img class="col-12 col-lg-6 block__73422 order-lg-2" src="{{ asset($formation->image) }}">
            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-4 text-black">{{$formation->titre }}</h2>
              <h4 class="text-primary">{{$formation->prix }}</h4>
              <p>{{$formation->description }}</p>
              @foreach($inscriptions as $inscription)
              @auth
@if($formation->titre == $inscription->formation && $inscription->email == Auth::user()->email )
<button type="submit" onclick="window.location.href='/repevaluation/{{$formation->id}}'" class="btn btn-primary btn-md text-white">Evaluation</button>
@else
<form method="POST" action="{{route('inscription')}}">
@csrf
 <input type="hidden" name="email" value="{{Auth::user()->email}}">
<input type="hidden" name="formation" value="{{$formation->titre}}">
<button class="btn btn-secondary btn-md">s'inscrire</button>
</form>


@endif
@endauth
@endforeach
               </div>
            </div>
            <div class="pt-5">
              <h3 class="mb-5">Commentaires</h3>
              <ul class="comment-list">
				@foreach($commentaires as $commentaire)
				@if($commentaire->id_formation == $formation->id)
                <li class="comment">
                  <div class="comment-body">
                    <h3>{{$commentaire->name }}</h3>
                    <p>{{$commentaire->message }}</p>
                  </div>
                </li>
                @endif
                  @endforeach
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
              	@auth
                <h3 class="mb-5">Ajouter un commentaire</h3>
                
<form method="POST" action="{{route('commentaire')}}">
	@csrf

<input type="hidden" name="id_formation" value="{{$formation->id}}">

 <input type="hidden" name="name" value="{{Auth::user()->name}}">

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  
                  <div class="form-group">
                   <button type="submit"  class="btn btn-primary btn-md text-white">Commenter</button>
                  </div>    
</form>
@endauth
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>⁾
@endsection