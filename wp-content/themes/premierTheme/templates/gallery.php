<?php 
/*
  Template Name: Champ Galerie
*/

  get_header();
    add_action('wp_enqueue_scripts', 'capitaine_register_assets');
  if( have_posts() ) : while( have_posts() ) : the_post();
?>

<?php 
    $images = get_field( 'gallery' );
    $size = 'gallery-thumb'; // (thumbnail, medium, large, full or custom size)
    
    if( $images ): 
 ?>
    <ul class="acf-gallery">
    	<?php foreach( $images as $image_id ): ?>
        	<li>
            	<a href="<?php echo wp_get_attachment_url( $image_id ); ?>">
          			<?php echo wp_get_attachment_image( $image_id, $size ); ?>
                </a>
        	</li>
      	<?php endforeach; ?>
    </ul>
 <?php endif; ?>
 <?php endwhile; endif; ?>
 <?php get_footer(); ?>