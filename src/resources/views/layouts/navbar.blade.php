              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">

                  <li><a href="/" class="nav-link">Le CDC</a></li>
                  <li class="has-children">
                    <a href="/Catalogue" class="nav-link">Catégories</a>
                    <ul class="dropdown arrow-top">

    @foreach($categories as $categorie)
                          <li><a href="/Catalogue#{{$categorie->titre}}" class="nav-link">{{$categorie->titre}}</a></li>
  @endforeach

                    </ul>
                  </li>
                  <li><a href="/Formations" class="nav-link">Formations</a></li>
                  <li><a href="https://www.biat.com.tn/" class="nav-link">A propos</a></li>
                  <li><a href="/Contact" class="nav-link">Contact</a></li>
                  @auth
                  <li><a href="/JEPROPOSEMAFORMATION" class="nav-link">Proposer une formation</a></li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                       <button class="btn btn-primary text-white px-4" >déconnexion</button>
                                    </form></li>
                                    @endauth
                      @guest
                    <li><a href="/register" class="nav-link">crée un compte</a></li>            
                    <li><button onclick="window.location.href='/login'" class="btn btn-primary text-white px-4">connexion</button></li>
                     @endguest  

@if(Auth::check() && Auth::user()->role->id == 1)
<li><button onclick="window.location.href='/admin'" class="btn btn-danger text-white px-4">ADMIN MODE</button></li> 
@endif

                </ul>
              </nav>
               <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>