<div class="container">
<div class="row">
        <div class="col" id="title">
            <h2><?php get_template_part('tamplate-parts/entry', 'title');
            ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            
<?php

if(has_post_thumbnail()):?>
    <div class="image">
    <?php the_post_thumbnail();?>
    </div>
<?php
endif;
?>

</div>
    </div>



    <div class="row">
        <div class="col">
            <?php  the_content();?>
        </div>
    </div>
