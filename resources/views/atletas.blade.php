    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          {{-- <h3 class="text-secondary mb-0">Atletas</h3> --}}
          <h2 class="mb-5">Nuestros deportistas</h2>
        </div>
        <div class="row">
          @foreach($atletas as $atleta)
            <div class="col-lg-3 col-md-4 col-sm-6">
              <a class="navbar-brand js-scroll-trigger" href="{{ url('/atleta',$atleta->id) }}">
                <span class="d-block">{{ $atleta->nombre }}  {{ $atleta->apellido }}</span>
                <span class="d-lg-block">
                  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ $atleta->avatar }}" alt="">
                </span>
              </a>            
            </div>
          @endforeach  
        </div>
      </div>
    </section>