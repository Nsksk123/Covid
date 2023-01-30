<?php get_header(); ?>
<div class="container mb-5">
    <div class="row">

<?php

$news = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 15
]);

if($news->have_posts()):
    while($news->have_posts()):
        $news->the_post();

?>
<div class="col-4">
<div class="card mb-5" style="" id="card">
  <img src="<?= the_post_thumbnail_url()?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php the_title();?></h5>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <p class="card-text"><?php the_content();?></p>
  </div>
</div>
</div>

<?php
endwhile;
    the_posts_pagination();
endif;
wp_reset_postdata();
?>
</div>
</div>
<?php get_footer();?>

