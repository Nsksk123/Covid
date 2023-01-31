<?php
if (is_singular()):
    the_title();
else:
    the_title( '<a class="card-title" href="' . esc_url( get_permalink() ) . '">', '</a>' );
endif;

?>