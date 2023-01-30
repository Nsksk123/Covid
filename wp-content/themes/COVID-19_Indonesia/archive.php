<?php get_header();?>
<div class="container mb-5">
    <div class="row">
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