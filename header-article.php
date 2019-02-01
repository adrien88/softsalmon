
<?php
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html charset="utf8">
<head>
  <title>
      <?php bloginfo('name'); ?>
      </title>
      <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

       <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
       <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
       <!--  importer la feuille de style -->
       <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
       <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
       <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
       <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <?php
      wp_head();
      ?>
     </head>

     <body>
      <header id="header" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>)">
        <h1>
          <?php
          $data = get_post(get_the_id());
          echo $data->post_title;
          ?>
        </h1>
      </header>
