<div class="hero hero--archive">
      <div class="hero__title-wrapper">
        <h1 class="hero__title"> <span class="hero__title__upper">BUSCADOR DE </span>BARCOS</h1>
      </div>
</div>
<div class="search section section--dark section--justified">
    <div class="row">
        <div class="col-9">
          <h2 class="search__title">BUSCADOR DE BARCOS</h2>
        </div>
        <div class="search__arrow__wrapper col-3">
          <div class="search__arrow search__arrow--shows"></div>
        </div>
        <div class="container-fluid search__controls">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div id="rate_slider"></div>
            </div>
            <div class="col-12 col-lg-4">
              <div id="length_slider"></div>
            </div>
            <div class="col-12 col-lg-4">
              <div id="cabins_slider"></div>
            </div>
          </div>
          
          <form role="search" method="get" action="<?php echo home_url('/'); ?>">
            <div class="row">
              <div class="col-12 col-lg-6">
                <p class="search__select-title">TIPO</p>
                <select class="search__select" name="ship_type" id="">
                  <option value="0">Seleccione un tipo de barco</option>
                  <option value="1">Motor</option>
                  <option value="2">Vela</option>
                  <option value="3">Ambos</option>
                </select>
              </div>
              <input type="hidden" name="post_type"   value="yate">
              <input type="hidden" name="min_rate"    id="min_rate">
              <input type="hidden" name="max_rate"    id="max_rate">
              <input type="hidden" name="min_length"  id="min_length">
              <input type="hidden" name="max_length"  id="max_length">
              <input type="hidden" name="min_cabins"  id="min_cabins">
              <input type="hidden" name="max_cabins"  id="max_cabins">
              <?php wp_nonce_field( 'yatch_search', 'search_id', false, true ); ?>
              <div class="search__button__container col-12 col-lg-6">
                <input class="search__button" type="submit" value="Buscar">
              </div>
            </div>
          </form>
          
        </div>
    </div>
</div>