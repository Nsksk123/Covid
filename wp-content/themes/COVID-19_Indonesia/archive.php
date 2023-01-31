<?php get_header();?>
<div class="jumbotron jumbotron-fluid mb-5">
  <div class="container">
    <h1 class="display-4">Berita Covid-19 Di Indonesia</h1>
    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
  </div>
</div>
<div class="container container shadow p-5 mt-5">
    <div class="row">
        <h1 class="judul"><?php the_category()?></h1>
<?php 

if(have_posts()):
    while(have_posts()):
        the_post();
        get_template_part('tamplate-parts/content', get_post_format());
    endwhile;
else:
    get_template_part('tamlate-parts/content', 'none');
endif;
wp_reset_postdata();
?>
</div>
</div>

<?php get_footer();?>