<!DOCTYPE html>
<html lang="NL">
  <head>
    <title>Tim's Wordpress theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/4e0f37080c.js"></script>


    <!-- My CSS -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script type="text/javascript">
        
        jQuery(document).ready(function(){

            jQuery('.navIcon').on('click', function(){

                jQuery(this).toggleClass('active');
                jQuery('.navList').toggleClass('active');

            });
        });
    </script>

</head>
<body>

<!-- My Header with Nav -->
<header class="nav-full">
    <div class="nav-container row">
        <div class="nav-title">
            <a href="/">T1m<small>INC</small></a>
        </div>
        <nav class="nav">
            <div class="navList">
                <a class="nav-item active" href="/">Home</a>
                <?php wp_list_pages( '&title_li=' ); ?>
            </div>
            <div class="navIcon"></div>
        </nav>
    </div>
</header>

<!-- My Main Container -->
<main class="container">

    <!-- My Title -->
    <div class="title">
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <p><?php echo get_bloginfo( 'description' ); ?></p>
    </div>