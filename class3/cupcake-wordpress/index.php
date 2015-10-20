<?php get_header(); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="eight columns">
        <?php get_template_part( 'loop', 'index' );?>
      </div>
      <div class="four columns">
        <aside>
          <h1><span class="header">Cupcake</span> of the Month</h1>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured-cupcake.jpg" alt="Cupcake of the month">
          <h2><span class="subheader">Fair Trade</span> Chocolate <br>
            Moose</h2>
        </aside>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
