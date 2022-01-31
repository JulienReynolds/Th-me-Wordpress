<?php get_header() ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<h1><?php the_title()?> </h1>
<?php var_dump(get_post_meta(get_the_ID(), 'articles_payant', true)); ?>
<?php if(get_post_meta(get_the_ID(), 'articles_payant', true) === '1'): ?>
<div class = "alert alert-info">
Cette article est reservé aux abonnées
</div>
<?php endif ?>
<p>
<img src="<?php the_post_thumbnail_url(); ?> "alt = "" style="width:100%; height : auto;">
</p>
<?php the_content() ?>

<?php endwhile; 
endif; ?>

<?php get_footer() ?>
