<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
      <a href="{{route('home')}}" class="navbar-brand">
        <h2>{{config('app.name')}} </h2>
      </a>


        <button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
           </li>
           <li class="nav-item">
            <a href="{{route('register')}}" class="nav-link {{ Route::is('register') ? 'active' : '' }}" aria-current="page" >
                {{ __('Реєстрація') }}
            </a>
            
      </li>

        <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link {{ Route::is('login') ? 'active' : '' }}" aria-current="page" >
                {{ __('Вхід') }}
            </a>
         </li>



      </li>
        </ul>



          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
             
          <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" >
                    {{ __('Головна') }}
                </a>
          </li>
            <li class="nav-item">
              {{-- <a href="{{route('blog')}}" class="nav-link {{ Route::is('blog*') ? 'active' : '' }}" aria-current="page" >
                  {{ __('Товари') }}
              </a>
   --}}
              <li class="nav-item">
                <a href="{{route('about-us')}}" class="nav-link {{ Route::is('about-us') ? 'active' : '' }}" aria-current="page" >
                    {{ __('Про нас') }}
                </a>
             </li>
             <li class="nav-item">
                <a href="{{route('contacts')}}" class="nav-link {{ Route::is('contacts') ? 'active' : '' }}" aria-current="page" >
                    {{ __('Контакти') }}
                </a>
            </ul>




      </div>
    </div>
  </nav>