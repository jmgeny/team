    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h2 class="mb-5">Nuestros deportistas</h2>
        </div>
        <div class="row">
          @foreach($atletas as $atleta)
            <div class="col-lg-3 col-md-4 col-sm-6">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">  
                <span class="d-block">Nombre del Atleta</span>
                <span class="d-lg-block">
                  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/profile.jpg') }}" alt="">
                </span>
                </button>
            </div>
          @endforeach  
        </div>
      </div>
    </section>

@include('atletas.atleta_1')