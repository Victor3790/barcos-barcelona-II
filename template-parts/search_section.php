<div class="hero hero--archive" style="margin-top:0;">
      <div class="hero__title-wrapper">
        <h1 class="hero__title"> <span class="hero__title__upper">BUSCADOR DE </span>BARCOS</h1>
        <span class="hero__arrow"></span>
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
              <div class="col-12 col-lg-4">
                <p class="search__select-title">TIPO</p>
                <?php $tipos = get_terms( [ 'taxonomy' => 'tipo', 'hide_empty' => false ] );?>
                <select class="search__select" name="ship_type">
                  <option value="0">Seleccione un tipo de barco</option>
                  <?php if( !empty( $tipos ) ) : ?>
                    <?php foreach( $tipos as $tipo ) : ?>
                      <option value="<?php echo $tipo->slug; ?>">
                        <?php echo $tipo->name; ?>
                      </option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <option value="0">Ambos</option>
                </select>
              </div>
              <div class="col-12 col-lg-4">
                <p class="search__select-title">DESTINO</p>
                <?php $destinos = get_terms( [ 'taxonomy' => 'destino', 'hide_empty' => false ] );?>
                <select class="search__select" name="cruising_area">
                  <option value="0">Seleccione destino </option>
                    <?php if( !empty( $destinos ) ) : ?>
                      <?php foreach( $destinos as $destino ) : ?>
                        <option value="<?php echo $destino->slug; ?>">
                          <?php echo $destino->name; ?>
                        </option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                </select>
              </div>
              <div class="search__button__container col-12 col-lg-4">
                <input type="hidden" name="post_type"   value="yate">
                <input type="hidden" name="min_rate"    id="min_rate">
                <input type="hidden" name="max_rate"    id="max_rate">
                <input type="hidden" name="min_length"  id="min_length">
                <input type="hidden" name="max_length"  id="max_length">
                <input type="hidden" name="min_cabins"  id="min_cabins">
                <input type="hidden" name="max_cabins"  id="max_cabins">
                <?php wp_nonce_field( 'yatch_search', 'search_id', false, true ); ?>
                <input class="search__button" type="submit" value="Buscar">
              </div>
            </div>
          </form>
          
        </div>
    </div>
</div>