
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet"> -->
    <link href="<?php echo get_bloginfo('template_directory') . '/css/blog.css';?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    php hook inside wordpress 
    <?php wp_head(); ?>
  </head>

  <body>


    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
   
          <a class="blog-nav-item active" href="<?php echo get_bloginfo('wpurl'); ?>">Home</a>
     
          <?php wp_list_pages('title_li='); ?>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><a href="<?php echo  get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
        <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
      </div>