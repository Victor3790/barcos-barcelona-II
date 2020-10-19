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
	$fields = get_field_objects();
	$subField = get_field('sub_especificaciones');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content content">
		<div class="hero hero--single">
			<div class="hero__title-wrapper">
			<h1 class="hero__title">YACHT NAME</h1>
			<div class="hero__title__lower">COMPANY</div>
			</div>
		</div>
		<div class="section section--white section--justified yacht-info">
			<h2 class="yacht-info__title">YACHT NAME</h2>
			<div class="row">
			<div class="col-12 col-md-6">
				<ul class="yacht-info__list">
				<li class="yacht-info__list__item yacht-info--bold">SPECIFICATION</li>
				<li class="yacht-info__list__item">
					<span class="yacht-info__list__item-name">Largo:</span>
					<strong class="yacht-info__list__item-info">99.13m.</strong>
				</li>
				<li class="yacht-info__list__item">
					<span class="yacht-info__list__item-name">Beam:</span>
					<strong class="yacht-info__list__item-info">11.12m.</strong>
				</li>
				</ul>
			</div>
			<div class="col-12 col-md-6">
				<ul class="yacht-info__list">
				<li class="yacht-info__list__item yacht-info--bold">SPECIFICATION</li>
				<li class="yacht-info__list__item">
					<span class="yacht-info__list__item-name">Largo:</span>
					<strong class="yacht-info__list__item-info">99.13m.</strong>
				</li>
				<li class="yacht-info__list__item">
					<span class="yacht-info__list__item-name">Beam:</span>
					<strong class="yacht-info__list__item-info">11.12m.</strong>
				</li>
				</ul>
			</div>
			</div>
		</div>
		<div class="section section--dark section--justified charter-info">
			<h2 class="yacht-info__title">YACHT NAME</h2>
			<div class="row">
			<div class="col-12">
				<ul class="yacht-info__list">
				<li class="yacht-info__list__item yacht-info--bold">SPECIFICATION</li>
				<li class="yacht-info__list__item">
					<span class="yacht-info__list__item-name">Largo:</span>
					<strong class="yacht-info__list__item-info">99.13m.</strong>
				</li>
				<li class="yacht-info__list__item">
					<span class="yacht-info__list__item-name">Beam:</span>
					<strong class="yacht-info__list__item-info">11.12m.</strong>
				</li>
				</ul>
			</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
