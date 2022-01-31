<?php
/*
Template Name: Liste bd
*/
?>

<?php get_header() ?>

<div class="row">
<?php
 $loop = new WP_Query( array( 'post_type' => 'bd') );
    if ( $loop->have_posts() ):
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
            <div class="col-sm-4" >
 <div class="card" >
 <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '' , 'style' => 'height: auto;' ]) ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
	<ul>
	<?php the_terms(get_the_ID(), 'Type_ouvrage', '<li>','</li><li>', '</li>');
	?>
	</ul>
	 <p class="card-text"><?php the_content()?></p>
    <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
  </div>
  
</div>
</div>
        <?php endwhile;
        if (  $loop->max_num_pages > 1 ) : ?>
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
            </div>
        <?php endif;
    endif;
    wp_reset_postdata();
?>