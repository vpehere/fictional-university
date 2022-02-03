<?php 
  get_header();
  pageBanner(array(
    'title' => 'All Events',
    'subtitle' => 'See what\'s in our events !'
  ));
?>
<div class="container container--narrow page-section">
  <?php
    while(have_posts()){
      the_post(); 
      get_template_part('template-parts/content', 'event');
    }
    echo paginate_links();
?>
<hr class="section-break">
<p>Looking for our past events? <a href="<?php echo site_url('/past-events')?>">click here for our archive events</a></p>
</div>
<?php 
  get_footer();
?>