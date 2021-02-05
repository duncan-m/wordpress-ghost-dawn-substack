<?php
/*
 * Template Name: Custom Full Width
 * description: >-
  Page template without sidebar
 */


get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page-home' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.
?>
<div class="entry-content">
<ul class="home-post-list">

<?php 
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=10' );
 ?>
  
 
<?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink

?>

<li class="<?php echo $the_query->current_post >= 1 ? '' : 'active'; ?>"><span class="date"><?php echo get_the_date( 'M j' ); ?></span><span class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span> <span class="readingt"><?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes"]'); ?></li>
 
<?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
</ul></div> 
<?php
get_footer();
