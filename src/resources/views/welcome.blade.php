@extends('layouts.main')
@section('content')

      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/front.jpg')">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h1>Vous souhaitez développer vos compétences</h1>
                                      @guest
                    <a href="/register" class="mb-5">crée un compte</a><br>         
                    <button onclick="window.location.href='/login'" class="btn btn-primary text-white px-4">connexion</button>
                     @endguest  
                                       @auth
                                       
                  <button onclick="window.location.href='/Catalogue'" class="btn btn-primary text-white px-4">Choisissez dès maintenant votre formation</button>

                                    @endauth

              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="site-section bg-light" id="pricing-section">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Nos Formations Courtes</h2>
                <p>inscrivez-vous gratuitement !</p>
              </div>
            </div>
          </div>
          <div class="row mb-5">
<?php
$i = 1;
?>
    @foreach($formations as $formation)
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 card" data-aos="fade-up" data-aos-delay="200">
              <img class="card-img-top " src="{{$formation->image }}" alt="Card image cap" onclick="window.location.href='/forma/{{$formation->id}}'">
              <div class="pricing" onclick="window.location.href='/forma/{{$formation->id}}'">
                <h3 class="text-center text-black">{{$formation->prix}} </h3>
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
            <?php
if ($i++ == 3) break;
?>
        
  @endforeach
    </div>
        </div>
      </div>




      <div class="site-section" id="about-section">

        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Qui somme nous ?</h2>
                <p> La BIAT vient de fonder le centre de développement des compétences (CDC) dont l’objectif est de développer les compétences et de former ses futurs cadres  aussi de renforcer l’esprit d’entreprise et la culture BIAT, notamment en direction des nouvelles recrues dont le passage par le centre facilitera l’intégration.</p>
              </div>
            </div>
          </div>
        </div>

      </div>



      <div class="site-section bg-light" id="about-section">
        <div class="container">
          <div class="row justify-content-center mb-4 block-img-video-1-wrap">
            <div class="col-md-12 mb-5">
              <figure class="block-img-video-1" data-aos="fade">
                <a href="https://www.youtube.com/watch?v=Gyf6L3W3nTc" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/logolarge.jpg" alt="Image" class="img-fluid">
              </a>
              </figure>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="50">0</span>+</span>
                    <span class="caption">Formations spécialisées</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="38">0</span>+</span>
                    <span class="caption">Formateurs agrégés</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="10">0</span>+</span>
                    <span class="caption">ans d'expérience</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="1500">0</span>+</span>
                    <span class="caption">Cadres formés</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section" id="team-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Notre Équipe De Rêve</h2>
                <p>Chaque membre de notre équipe est différent mais des valeurs communes nous réunissent : l’innovation, le service et la qualité ! Envie d’en savoir plus ? Vous êtes au bon endroit.</p>
              </div>
            </div>
          </div>

          <div class="owl-carousel owl-all">
            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ahmed Ben Abdallah</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">formateur agile scrum</span>
              <p class="mb-4">Ingénieur informatique avec +7 ans dans le secteur bancaire.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>


            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Sihem Abdallah</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">formatrice finances publiques</span>
              <p class="mb-4">DRH à BIAT avec +20 ans dans le secteur bancaire.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>


            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ines Ahmed</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">formatrice  en leadership</span>
              <p class="mb-4">diplomée de l'IHEC avec +9 ans dans le secteur bancaire.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>





        </div>
      </div>



      <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/biat.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>



            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-4 text-black">Le Centre de Développement des Compétences de la BIAT </h2>
              <h4 class="text-primary">certifié ISO 9001</h4>
              <p>
Le CDC permettra d’accompagner la banque dans la réalisation de ses grands projets, telles que la mise en œuvre du Plan de transformation, ainsi que la mise en place du nouveau système d'information. Dans son ambition d’être une banque de proximité à travers la densification de son réseau d’agence et une banque innovante à travers la commercialisation de nouveaux services. En effet, Selon le staff de la banque, l'organisation du Centre est assurée par une structure « souple qui optimise les moyens ». La formation au sein de ce centre est assurée par trois différentes divisions, à savoir celle de capitalisation des connaissances et de communication, l’ingénierie des compétences et la division administrative et financière.</p>
            </div>

          </div>
        </div>
      </div>


      <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

          <div class="text-center mb-5">
            <div class="block-heading-1">
              <h2>Feedback</h2>
            </div>
          </div>

          <div class="owl-carousel nonloop-block-13">
            <div>
              <div class="block-testimony-1 text-center">

                <blockquote class="mb-4">
                  <p>&ldquo;Excellent centre de formation.  Équipe très à l'écoute et vraiment compétente.  Formation personnalisée et à la hauteur de mes attentes. Encore merci à vous tous et à bientôt  !&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ali</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;Très satisfaite de cette formation qui m'a permit de regagner la confiance pour affronter le monde du travail ! Une équipe très accueillante et professionnelle, le formateur est très attentif, professionnel et répond à toutes les questions. …&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_5.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Manel</h3>

              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">


                <blockquote class="mb-4">
                  <p>&ldquo;Très bonne expérience avec CDC, je recommande vivement leurs formations !&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/p1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Seif</h3>


              </div>
            </div>

          </div>

        </div>
      </div>

    </div>




@endsection