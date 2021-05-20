<?php
/**
 * Footer action
 * @package Megla
 */

function megla_footer_style_1(){ ?>
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="copyright">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'megla' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'megla' ), 'WordPress' );
						?>
					</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="copyright-right">
					<p>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'megla' ), 'megla', 'ashathemes' );
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php }
add_action('megla_footer_style','megla_footer_style_1');