<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cli</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php wp_head(); ?>
  </head>
<body>
  <section>
      <header>
        <div class="topheader container">
                     <nav>
                           <?php wp_nav_menu( [
		                          'theme_location'  => 'primary',
                              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                              'container'       => false,
	                          ] ); ?>
                       </nav>
            </div> 
    </header>