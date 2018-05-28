<!DOCTYPE html>
<html>

<head>
  
  <title>
    <?php wp_title('|', true, 'right'); bloginfo('name'); ?>
  </title>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <!-- Site Title -->
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

    <!-- Menu -->
    <nav>
      <?php wp_nav_menu( array( 
        'theme_location' => 'menu',
        'depth'					 => 1,
        'fallback_cb'    => '__return_false',
        ) ); 
      ?>
    </nav>
  </header>

  <main>
    <!-- The Loop -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_meta(); ?>
      <?php the_post_thumbnail();?>
      <?php the_content('Read more &raquo;'); ?>

    <?php endwhile; else: ?>
      
      <h2>Error 404</h2>        
      <p>Sorry, there&rsquo;s nothing here.</p>
        
    <?php endif; ?>

    <hr>

    <!-- Widget Area -->
    <?php dynamic_sidebar( 'widgets' ); ?>

  </main>

  <footer>
    <!-- Colophon -->
    <p>&copy;
      <?php echo date('Y'); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
    </p>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>
