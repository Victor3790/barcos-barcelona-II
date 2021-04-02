<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Base_Theme
 */

?>
<?php
	$specifications = get_field_objects();
	$accommodation = get_field('accommodation');
	$charter_info = get_field('charter_info');
	$cruising_areas = get_the_terms( $post->ID, 'destino' );
	$areas_string = '';

	if( !empty($cruising_areas) )
		$areas_string = join( ', ', wp_list_pluck( $cruising_areas, 'name' ) );
	
	$attachments = get_posts( 
						array( 
							'post_type' => 'attachment', 
							'post_mime_type' => 'image', 
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $post->ID
						) 
					); 

	if( $attachments ){

		$items = count( $attachments );
		$chunk_1_length = ceil( $items/2 );
		$chunk_2_length = $items - $chunk_1_length;

		$chunk_2_offset = $chunk_1_length;

		$chunk_1 = array_slice( $attachments, 0, $chunk_1_length );
		$chunk_2 = array_slice( $attachments, $chunk_2_offset, $chunk_2_length );
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content content" style = "background-color: #ededed;">
		<div class="hero hero--single">
			<div class="hero__title-wrapper">
				<h1 class="hero__title"><?php the_title(); ?></h1>
				<div class="hero__title__lower" style="text-transform:uppercase;">
					<?php the_field('builder'); ?>
				</div>
			</div>
		</div>
		<div>
			<?php 
				if( isset($chunk_1) ){
					foreach ( $chunk_1 as $item ) {
						$image_lg = wp_get_attachment_image_src( $item->ID, 'cbt_lg', false );
	
						echo 	'<div class="section__picture section__picture--center">' .
								'<div class="section__picture__img" ' . 
								'style="background-image: url(' . $image_lg[0] . ')' .
								'">' . 
								'</div>' .
								'</div>';
					}
				}
			?>
		</div>
		<div class="yacht-container">
			<div class="yacht-info-container">
				<div class="section section--white section--justified yacht-info">
					<h2 class="yacht-info__title" style="text-transform:uppercase;"><?php the_title(); ?></h2>
					<div id="info_row" class="row">
						<div class="col-12 col-md-6">
							<ul class="yacht-info__list">
								<li class="yacht-info__list__item yacht-info--bold">ESPECIFICACIONES</li>
								<?php 
									if( $specifications ){
										foreach ( $specifications as $specification ) {
											if( $specification['value'] && 
												!is_array( $specification['value'] ) && 
												!is_numeric( $specification['value'] ) ) {
													
													echo	'<li class="yacht-info__list__item">'. 
															'<span class="yacht-info__list__item-name">' .
															$specification['label'] . 
															'</span>' . 
															'<strong class="yacht-info__list__item-info">' . 
															$specification['value'] . 
															'</strong>'  . 
															'</li>';
											}
										}
									}
								?>
							</ul>

							<ul class="yacht-info__list" style="margin-top: 50px">
								<li class="yacht-info__list__item yacht-info--bold">ALOJAMIENTO</li>
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name">Camarotes</span>
									<strong class="yacht-info__list__item-info">
										<?php echo $accommodation['camarotes']; ?>
									</strong>
								</li>
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name">Invitados</span>
									<strong class="yacht-info__list__item-info">
										<?php echo $accommodation['invitados']; ?>
									</strong>
								</li>
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name">Tripulación</span>
									<strong class="yacht-info__list__item-info">
										<?php echo $accommodation['tripulacion']; ?>
									</strong>
								</li>
							</ul>

						</div>
						<div id="yacht_text_content" class="col-12 col-md-6" style="margin-top: 25px;">
							<?php the_content(); ?>
							<div id="more_pics" class="yacht_more_pics">
								<p id="more_pics_p"><i>Ver más fotografías</i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="yacht-contact-container">
				<div class="section section--dark section--justified charter-info" style="text-align: center;">
					<h2 class="yacht-info__title">INFORMACIÓN DE ALQUILER</h2>
					<div class="row">
						<div class="col-12">
							<ul class="yacht-info__list">
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name yacht-info--bold">
										PRECIO
									</span>
								</li>
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name"><?php echo $charter_info['price'] ?></span>
								</li>
							</ul>
							<ul class="yacht-info__list" style="margin-top: 38px;">
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name yacht-info--bold">
										AREAS DE NAVEGACIÓN
									</span>
								</li>
								<li class="yacht-info__list__item">
									<span class="yacht-info__list__item-name">
										<?php 
											echo $areas_string;
										?>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div style="margin: 25px 0 15px 0;">
								<span class="yacht-info__list__item-name yacht-info--bold">
									CONTÁCTENOS
								</span>
							</div>	
							<?php echo do_shortcode( '[contact-form-7 id="243" title="Main"]' ); ?>
							<div class="yacht_more_pics_info">
								<p class="yacht_more_pics_info_p"><i>Ver más fotografías</i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<?php 
				if( isset($chunk_2) ){
					foreach ( $chunk_2 as $item ) {
						$image_lg = wp_get_attachment_image_src( $item->ID, 'cbt_lg', false );
	
						echo 	'<div class="section__picture section__picture--center">' .
								'<div class="section__picture__img" ' . 
								'style="background-image: url(' . $image_lg[0] . ')' .
								'">' . 
								'</div>' .
								'</div>';
					}
				}
			?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID();?> -->
