<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid mb-5">
  <div class="container">
    <h1 class="display-4">Berita Covid-19 Di Indonesia</h1>
    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
  </div>
</div>


<div class="container mb-5">
  <h1>Berita Hari Ini</h1>
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
    <h5 class="card-title"><?php get_template_part('tamplate-parts/entry', 'title');?></h5>
    <p class="card-text"><small class="text-muted"><?php the_time();?>, <?php the_date()?></small></p>
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



<div class="container" id="contact">
  <h1 class="kontak">Kontak</h1>
  <div class="row justify-content-center" id="masukan">
    <div class="col-4 bg-danger shadow p-5 text-center">
        <h2 class="mt-5">Kirimkan Masukan</h2>
        <p class="mt-5">Jika kamu memiliki masukan tentang website ini silahkan masukan masukan anda di form kontak disamping!</p>
    </div>
    <div class="col-4 shadow p-5">
      <form action="">
        <h2 class="contact">Contact</h2>
        <div class="row mb-3">
          <div class="col-6">
            <label for="name">Nama</label>
            <input type="text" required placeholder="Nama...">
          </div>
          <div class="col-6">
            <label for="email">Email</label>
            <input type="email" required placeholder="Email...">
          </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="masukan">Masukan</label>
              <textarea name="" id="masukan" cols="30" rows="10" required placeholder="Kirim Masukan Andas"></textarea>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <button class="btn btn-danger">Kirim</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
<?php get_footer();?>