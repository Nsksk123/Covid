<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head()?>    
</head>
  <body>
  <nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php
        
        wp_nav_menu([
            'container' => '',
            'item_warp' => '%3$s',
            'theme_location' => 'covid-menu'
        ]);

        ?>
    </div>
  </div>
</nav>

<?php
    $header = new WP_Query([
        'post_type' => 'page',
    ])
?>

<div class="jumbotron jumbotron-fluid mb-5">
  <div class="container">
    <h1 class="display-4">Berita Covid-19 Di Indonesia</h1>
    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
  </div>
</div>