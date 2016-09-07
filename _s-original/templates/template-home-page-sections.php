<?php
/*
  Theme Name: _SsS
  Template Name: Home Page Sections
*/
get_header(); ?>

<div id="home-page-primary" class="site-primary">
  <main id="home-page-main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <div id="home-call-to-action" class="home-section">
      <div class="row">
        <div class="small-12 columns">
          <!-- Content For this section goes here... -->
        </div>
      </div><!-- .row -->
    </div><!-- #home-call-to-action -->

    <div id="home-staff" class="home-section">
      <div class="row">
        <div class="small-12 columns">
          <!-- Content For this section goes here... -->
        </div>
      </div><!-- .row -->
    </div><!-- #home-staff -->

    <div id="home-blog" class="home-section">
      <div class="row">
        <div class="small-12 columns">
          <!-- Content For this section goes here... -->
        </div>
      </div><!-- .row -->
    </div><!-- #home-blog -->

    <div id="home-contact" class="home-section">
      <div class="row">
        <div class="small-12 columns">
          <!-- Content For this section goes here... -->
        </div>
      </div><!-- .row -->
    </div><!-- #home-contact -->

  <?php endwhile; // end of the loop. ?>

  </main><!-- #single-main -->
</div><!-- #single-primary -->

<?php get_footer(); ?>