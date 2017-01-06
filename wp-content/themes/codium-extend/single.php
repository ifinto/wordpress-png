<?php get_header() ?>

  <div class="single-post-page">
    <div class="page-title">
      <div class="container">
        <div class="breadcrumbs">
        <?php 
          if (function_exists('bcn_display')) {
            bcn_display();
          }
        ?>
        </div>
        <h1 class="entry-title"><?php the_title() ?> PNG Clipart</h1>
      </div>
    </div>

    <div class="search-filters">
      
    </div>
    <div class="container">
      <div class="entry-images">
        <?php get_template_part('template-parts/single-image'); ?>
        <div class="post-details-wrapper">
          <?php
            $posttags = get_the_tags();
            if ($posttags) {
          ?>
            <div class="post-tags">
              Tags: 
              <?php
                foreach($posttags as $tag) {
                  echo '<a href="'. get_tag_link($tag->term_id) .'">'; 
                  echo   '<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>'; 
                  echo    $tag->name; 
                  echo   '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>'; 
                  echo '</a>'; 
                }
              ?>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  
    <div class="block-grid-wrapper">
      <div class="container">
        <h2 class="section-title">Related posts:</h2>
        <?php if(is_single() && function_exists('igit_rpwt_posts')) igit_rpwt_posts(); ?>
      </div>
    </div>
  </div>

<?php get_footer() ?>