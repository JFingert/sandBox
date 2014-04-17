<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fifteen
 */
?>
	</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
	<div class="container">
	<?php if ( of_get_option('credit1', true) == 0 ) { ?>
		<div class="site-info col-md-4">
			<?php do_action( 'fifteen_credits' ); ?>
			<?php printf( __( 'Fifteen Theme by %1$s.', 'fifteen' ), '<a href="http://inkhive.com/" rel="designer">InkHive</a>' ); ?>
		</div><!-- .site-info -->
	<?php } ?>	
		<div id="footertext" class="col-md-7">
        	<?php
			if ( (function_exists( 'of_get_option' ) && (of_get_option('footertext2', true) != 1) ) ) {
			 	echo of_get_option('footertext2', true); } ?>
        </div>
	</div>   

<div class='breadcrumb'>
<?php // if there is a parent, display the link
$parent_title = get_the_title($post->post_parent);
if ( $parent_title != the_title(' ', ' ', false) ) {
  echo '<a href=' . get_permalink($post->post_parent)
    . ' ' . 'title=' . $parent_title . '>' . $parent_title
    . '</a> » ';
} 
// then go on to the current page link
?>
<a href='<?php the_permalink() ?>'
rel='bookmark' title='<?php the_title_attribute(); ?>'>
<?php the_title(); ?></a> »
</div>


	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>