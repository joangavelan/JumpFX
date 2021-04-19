<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JumpFX - Digital Marketing</title>
    <script data-ad-client="ca-pub-7997794586711401" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php wp_head(); ?>
</head>
<body>

  <?php    
    $upload_dir = wp_upload_dir();
  ?>

  <header class="header">
    <img class="header__shadow" src="<?=$upload_dir['baseurl'];?>/2021/04/Rectangle-1-copy.png" alt="shadow">
    <?php get_template_part('includes/nav')?>
    <?php get_template_part('includes/section', 'hero')?>
  </header>

<main class="site-content">