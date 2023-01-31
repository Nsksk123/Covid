
<div class="col-4">
<div class="card mb-5" style="" id="card">
  <img src="<?= the_post_thumbnail_url()?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php get_template_part('tamplate-parts/entry', 'title');?></h5>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <p class="card-text"><?php 
        if(has_excerpt()){
                the_excerpt();
        }
    ?></p>
  </div>
</div>
</div>
