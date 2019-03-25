
<html lang="fi">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title><?php echo get_bloginfo( 'name' ); ?> </title -->
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/main.css">
    <?php wp_head();?>
</head>
<body class="">
  <nav role="navigation">

     <div id="menu">
      <input type="checkbox"/>
        <div id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
          <ul id="menuitems">
              <?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
          </ul>
        </div> <!-- menu -->
  </nav>
  <!-- content starts here, this is closed in footer.php -->
