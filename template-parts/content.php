<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Megla
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
<div class="col-md-6">
	<?php megla_post_thumbnail(); ?>
</div>
<div class="col-md-6">
	<div class="post-content">
		<?php
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php 
					megla_posted_by();
					megla_posted_on(); 
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->
			<div class="entry-content">
				<?php

				if(is_single( )){
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'megla' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);
				}else{
					the_excerpt();
					echo'<a href="'.esc_url ( get_the_permalink( $post->ID ) ).'" class="read-more-btn">'.esc_html__('Read More','megla').'</a>';
				}
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'megla' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<?php if ( is_singular() ) : ?>
				<footer class="entry-footer">
					<?php megla_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</div>
</div>
</div>
</article>