<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Barcos_Barcelona
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/upper_yate_venta' ); ?>
		<div class="section section--white section--justified">
			<div class="row">
				<div class="col" style="margin-top: 50px;">
					<p>
						Si desea vender su yate de forma rápida y segura, en Barcos Barcelona S.L., 
						podemos asesorarle en el proceso de compra-venta con préstamos mediante 
						LEASING para barcos nuevos y usados, ofreciéndole la posibilidad de contratar 
						los mejores seguros náuticos.
					</p>
					<p>
						Como empresa líder en el sector, trabajamos en equipo con nuestros clientes para 
						guiarles y aconsejarles en todos y cada uno de los aspectos de la compra. 
						La constante interacción en todos los niveles de la industria náutica garantiza 
						que obtengamos la información más actualizada de todos los yates disponibles. 
						Hemos desarrollado una base de datos que nos permite mantener un archivo detallado 
						de todos los yates en venta del mundo. Trabajamos en cooperación con nuestros equipos 
						de gestión de yates, legal y de construcción, permitiéndoles recurrir durante todo 
						el proceso a expertos legales y técnicos de máximo nivel.
					</p>
					<p>
						Trabajamos directamente con más de 300 fabricantes y distribuidores de barcos y 
						yates de lujo en todo el mundo
					</p>
				</div>
			</div>
			<div class="cards row">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/result_yacht' );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="pagination">
						<?php
							global $wp_query;
							$total = $wp_query->found_posts;
							$on_page = $wp_query->post_count; 
						?>
						<?php if( $total > $on_page ) : ?>
							<p class="pagination__pages-text">Páginas</p>
						<?php endif; ?>
						<?php
						echo paginate_links(array(
							'prev_next' => false
						));
						?>
					</div>
				</div>
			</div>
		</div>

	<!--</main>--><!-- #main -->

<?php
get_footer('yacht_archive');
