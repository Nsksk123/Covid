<?php
get_header();


while(have_posts()):
    the_post();
    get_template_part('tamplate-parts/content', 'single');

    the_post_navigation();

    if(comments_open() || get_comments_number()):
        comments_template();
    endif;
endwhile;

?>
</div>
<?php
get_footer();
?>