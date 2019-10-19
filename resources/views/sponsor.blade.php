    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          {{-- <h3 class="text-secondary mb-0">Sponsor</h3> --}}
          {{-- <h2 class="mb-5">Nuestros sponsor</h2> --}}
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3">
              <button type="button" class="portfolio-item" data-toggle="modal" data-target="#sponsorModal">
              <span class="caption">
                <span class="caption-content">
                </span>
              </span>
              <img class="img-fluid" src="{{ asset('img/sponsors/specialized.png') }}" alt="Specialized">
          </div>
          <div class="col-lg-3">
              <button type="button" class="portfolio-item" data-toggle="modal" data-target="#sponsorModal">
              <span class="caption">
                <span class="caption-content">
                </span>
              </span>
              <img class="img-fluid" src="{{ asset('img/sponsors/alemana.png') }}" alt="Specialized">
          </div>
          <div class="col-lg-3">
              <button type="button" class="portfolio-item" data-toggle="modal" data-target="#sponsorModal">
              <span class="caption">
                <span class="caption-content">
                </span>
              </span>
              <img class="img-fluid" src="{{ asset('img/sponsors/cornel.png') }}" alt="Specialized">
          </div>
          <div class="col-lg-3">
              <button type="button" class="portfolio-item" data-toggle="modal" data-target="#sponsorModal">
              <span class="caption">
                <span class="caption-content">
                </span>
              </span>
              <img class="img-fluid" src="{{ asset('img/sponsors/enard.png') }}" alt="Specialized">
          </div>                              
        </div>
      </div>
    </section>

@include('sponsors.sponsor')    